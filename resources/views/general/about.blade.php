@extends('layouts.app')

@section('content')
<div class="container">
    <script>
        /*! HTML5 Shiv vpre3.6 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed */
;(function(window, document) {

/** Preset options */
var options = window.html5 || {};

/** Used to skip problem elements */
var reSkip = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;

/** Not all elements can be cloned in IE (this list can be shortend) **/
var saveClones = /^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i;

/** Detect whether the browser supports default html5 styles */
var supportsHtml5Styles;

/** Name of the expando, to work with multiple documents or to re-shiv one document */
var expando = '_html5shiv';

/** The id for the the documents expando */
var expanID = 0;

/** Cached data for each document */
var expandoData = {};

/** Detect whether the browser supports unknown elements */
var supportsUnknownElements;

(function() {
  var a = document.createElement('a');

  a.innerHTML = '<xyz></xyz>';

  //if the hidden property is implemented we can assume, that the browser supports basic HTML5 Styles
  supportsHtml5Styles = ('hidden' in a);

  supportsUnknownElements = a.childNodes.length == 1 || (function() {
    // assign a false positive if unable to shiv
    try {
      (document.createElement)('a');
    } catch(e) {
      return true;
    }
    var frag = document.createDocumentFragment();
    return (
      typeof frag.cloneNode == 'undefined' ||
      typeof frag.createDocumentFragment == 'undefined' ||
      typeof frag.createElement == 'undefined'
    );
  }());

}());

/*--------------------------------------------------------------------------*/

/**
 * Creates a style sheet with the given CSS text and adds it to the document.
 * @private
 * @param {Document} ownerDocument The document.
 * @param {String} cssText The CSS text.
 * @returns {StyleSheet} The style element.
 */
function addStyleSheet(ownerDocument, cssText) {
  var p = ownerDocument.createElement('p'),
      parent = ownerDocument.getElementsByTagName('head')[0] || ownerDocument.documentElement;

  p.innerHTML = 'x<style>' + cssText + '</style>';
  return parent.insertBefore(p.lastChild, parent.firstChild);
}

/**
 * Returns the value of `html5.elements` as an array.
 * @private
 * @returns {Array} An array of shived element node names.
 */
function getElements() {
  var elements = html5.elements;
  return typeof elements == 'string' ? elements.split(' ') : elements;
}

  /**
 * Returns the data associated to the given document
 * @private
 * @param {Document} ownerDocument The document.
 * @returns {Object} An object of data.
 */
function getExpandoData(ownerDocument) {
  var data = expandoData[ownerDocument[expando]];
  if (!data) {
      data = {};
      expanID++;
      ownerDocument[expando] = expanID;
      expandoData[expanID] = data;
  }
  return data;
}

/**
 * returns a shived element for the given nodeName and document
 * @memberOf html5
 * @param {String} nodeName name of the element
 * @param {Document} ownerDocument The context document.
 * @returns {Object} The shived element.
 */
function createElement(nodeName, ownerDocument, data){
  if (!ownerDocument) {
      ownerDocument = document;
  }
  if(supportsUnknownElements){
      return ownerDocument.createElement(nodeName);
  }
  data = data || getExpandoData(ownerDocument);
  var node;

  if (data.cache[nodeName]) {
      node = data.cache[nodeName].cloneNode();
  } else if (saveClones.test(nodeName)) {
      node = (data.cache[nodeName] = data.createElem(nodeName)).cloneNode();
  } else {
      node = data.createElem(nodeName);
  }

  // Avoid adding some elements to fragments in IE < 9 because
  // * Attributes like `name` or `type` cannot be set/changed once an element
  //   is inserted into a document/fragment
  // * Link elements with `src` attributes that are inaccessible, as with
  //   a 403 response, will cause the tab/window to crash
  // * Script elements appended to fragments will execute when their `src`
  //   or `text` property is set
  return node.canHaveChildren && !reSkip.test(nodeName) ? data.frag.appendChild(node) : node;
}

/**
 * returns a shived DocumentFragment for the given document
 * @memberOf html5
 * @param {Document} ownerDocument The context document.
 * @returns {Object} The shived DocumentFragment.
 */
function createDocumentFragment(ownerDocument, data){
  if (!ownerDocument) {
      ownerDocument = document;
  }
  if(supportsUnknownElements){
      return ownerDocument.createDocumentFragment();
  }
  data = data || getExpandoData(ownerDocument);
  var clone = data.frag.cloneNode(),
      i = 0,
      elems = getElements(),
      l = elems.length;
  for(;i<l;i++){
      clone.createElement(elems[i]);
  }
  return clone;
}

/**
 * Shivs the `createElement` and `createDocumentFragment` methods of the document.
 * @private
 * @param {Document|DocumentFragment} ownerDocument The document.
 * @param {Object} data of the document.
 */
function shivMethods(ownerDocument, data) {
  if (!data.cache) {
      data.cache = {};
      data.createElem = ownerDocument.createElement;
      data.createFrag = ownerDocument.createDocumentFragment;
      data.frag = data.createFrag();
  }


  ownerDocument.createElement = function(nodeName) {
    //abort shiv
    if (!html5.shivMethods) {
        return data.createElem(nodeName);
    }
    return createElement(nodeName);
  };

  ownerDocument.createDocumentFragment = Function('h,f', 'return function(){' +
    'var n=f.cloneNode(),c=n.createElement;' +
    'h.shivMethods&&(' +
      // unroll the `createElement` calls
      getElements().join().replace(/\w+/g, function(nodeName) {
        data.createElem(nodeName);
        data.frag.createElement(nodeName);
        return 'c("' + nodeName + '")';
      }) +
    ');return n}'
  )(html5, data.frag);
}

/*--------------------------------------------------------------------------*/

/**
 * Shivs the given document.
 * @memberOf html5
 * @param {Document} ownerDocument The document to shiv.
 * @returns {Document} The shived document.
 */
function shivDocument(ownerDocument) {
  if (!ownerDocument) {
      ownerDocument = document;
  }
  var data = getExpandoData(ownerDocument);

  if (html5.shivCSS && !supportsHtml5Styles && !data.hasCSS) {
    data.hasCSS = !!addStyleSheet(ownerDocument,
      // corrects block display not defined in IE6/7/8/9
      'article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}' +
      // adds styling not present in IE6/7/8/9
      'mark{background:#FF0;color:#000}'
    );
  }
  if (!supportsUnknownElements) {
    shivMethods(ownerDocument, data);
  }
  return ownerDocument;
}

/*--------------------------------------------------------------------------*/

/**
 * The `html5` object is exposed so that more elements can be shived and
 * existing shiving can be detected on iframes.
 * @type Object
 * @example
 *
 * // options can be changed before the script is included
 * html5 = { 'elements': 'mark section', 'shivCSS': false, 'shivMethods': false };
 */
var html5 = {

  /**
   * An array or space separated string of node names of the elements to shiv.
   * @memberOf html5
   * @type Array|String
   */
  'elements': options.elements || 'abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video',

  /**
   * A flag to indicate that the HTML5 style sheet should be inserted.
   * @memberOf html5
   * @type Boolean
   */
  'shivCSS': !(options.shivCSS === false),

  /**
   * Is equal to true if a browser supports creating unknown/HTML5 elements
   * @memberOf html5
   * @type boolean
   */
  'supportsUnknownElements': supportsUnknownElements,

  /**
   * A flag to indicate that the document's `createElement` and `createDocumentFragment`
   * methods should be overwritten.
   * @memberOf html5
   * @type Boolean
   */
  'shivMethods': !(options.shivMethods === false),

  /**
   * A string to describe the type of `html5` object ("default" or "default print").
   * @memberOf html5
   * @type String
   */
  'type': 'default',

  // shivs the document according to the specified `html5` object options
  'shivDocument': shivDocument,

  //creates a shived element
  createElement: createElement,

  //creates a shived documentFragment
  createDocumentFragment: createDocumentFragment
};

/*--------------------------------------------------------------------------*/

// expose html5
window.html5 = html5;

// shiv the document
shivDocument(document);

}(this, document));
    </script>


<head>
        <title>PlusMe Car share</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/layout.css" type="text/css">
</head>

<style>
/*
HTML 5 Template Name: Basic 88
File: Layout CSS
Author: OS Templates
Author URI: https://www.os-templates.com/
Licence: <a href="https://www.os-templates.com/template-terms">Website Template Licence</a>
*/

html{overflow-y:scroll;} /* Forces a scrollbar when the viewport is larger than the websites content - CSS3 */

body{margin:0; padding:0; font-size:13px; font-family:Georgia, "Times New Roman", Times, serif; color:#919191; background-color:#232323;}

.clear:after{content:"."; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
.clear{display:block; clear:both;}
html[xmlns] .clear{display:block;}
* html .clear{height:1%;}

a{outline:none; text-decoration:none;}

code{font-weight:normal; font-style:normal; font-family:Georgia, "Times New Roman", Times, serif;}

.fl_left{float:left;}
.fl_right{float:right;}

img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
.imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
.imgl{float:left; margin:0 15px 15px 0; clear:left;}
.imgr{float:right; margin:0 0 15px 15px; clear:right;}

/*----------------------------------------------HTML 5 Overrides-------------------------------------*/

address, article, aside, figcaption, figure, footer, header, nav, section{display:block; margin:0; padding:0;}

q{display:block; padding:0 10px 8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
q:before{content:'“ '; font-size:26px;}
q:after{content:' „'; font-size:26px; line-height:0;}

/* ----------------------------------------------Wrapper-------------------------------------*/

div.wrapper{display:block; width:100%; margin:0; padding:0; text-align:left;}

.row1, .row1 a{color:#000000; background-color:#FFA500;}
.row2{color:#979797; background-color:#FFFFFF;}
.row2 a{color:#FF9900; background-color:#FFFFFF;}
.row3{color:#989898; background-color:#333333;}
.row3 a{color:#FF9900; background-color:#333333;}
.row4, .row4 a{color:#919191; background-color:#232323;}

/*----------------------------------------------Generalise-------------------------------------*/

#header, #container, #footer, #copyright{display:block; width:960px; margin:0 auto;}

nav ul{margin:0; padding:0; list-style:none;}

h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:32px; font-weight:normal; font-style:italic; line-height:normal;}

address{font-style:normal;}

blockquote, q{display:block; padding:8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
blockquote:before, q:before{content:'“ '; font-size:26px;}
blockquote:after, q:after{content:' „'; font-size:26px; line-height:0;}

form, fieldset, legend{margin:0; padding:0; border:none;}
legend{display:none;}
input, textarea, select{font-size:5px; font-family:Georgia,"Times New Roman",Times,serif;}

.one_quarter, .two_quarter, .three_quarter, .four_quarter{display:block; float:left; margin:0 20px 0 0;}
.one_quarter{width:225px;}
.two_quarter{width:470px;}
.three_quarter{width:715px;}
.four_quarter{width:960px; float:none; margin-right:0; clear:both;}

.one_third, .two_third, .three_third{display:block; float:left; margin:0 30px 0 0;}
.one_third{width:300px;}
.two_third{width:630px;}
.three_third{width:960px; float:none; margin-right:0; clear:both;}

.lastbox{margin-right:0;}


#container{padding:30px 0;}
#container section{display:block; width:100%; margin:0 0 30px 0; padding:0;}
#container .last{margin:0;}
#container .more{text-align:right;}

/* ------boarder-----*/

#container #boarder{}

/* ------Main Content-----*/

#container #homepage{display:block; width:100%; line-height:1.8em;}

#container #homepage #services{}
#container #homepage #services article{}
#container #homepage #services article figure{}
#container #homepage #services article figure img{margin:0 0 15px 0; padding:4px; border:1px solid #D6D6D6;}
#container #homepage #services article figure figcaption{}
#container #homepage #services article figure h2{font-size:14px; font-weight:bold;}
#container #homepage #services article figure footer{}

#container #homepage #intro{}
#container #homepage #intro article{}
#container #homepage #intro article figure{}
#container #homepage #intro article figure img{float:right; margin:0 0 10px 0; padding:4px; border:1px solid #D6D6D6;}
#container #homepage #intro article figure figcaption{float:left; width:460px;}
#container #homepage #intro article figure h2{}
#container #homepage #intro article figure footer{}

</style>

    <!-- content -->
<div class="wrapper row2">
    <div id="container" class="clear">
      <!-- Boarder -->
      <section id="Boarder"><a href="#"><img src="#" width="800" height="500"alt=""></a></section>
      <center><p><font size="10" color="orange">Our Story</font></p></center>
      <h3><p><font size="5" color="black">It started as a simple idea: What if you could rent a vehicle when every you like and wherever you are? PlusMe's vision is to be the best car rental company in Australia, offering our customers the ‘best’ service, the ‘best’ rates and the ‘best’ experience, so when someone think of renting a vehicle the first think in their mind will be PlusMe. Our friendly, professional team understands your rental needs. You might be after an; economical car, 4WD, family sedan, luxury car, a bus, van or truck etc we can rent every kind of vehicles to you. At PlusMe, we're always happy to help you choose the right passenger or commercial vehicle. So, from the moment you walk through the doors to the time you drive away, in one of our rental cars, you can expect great personal service all the way.</font></p></h3>
      <p><font size="3" color="black">These are the major cars that we rent:</font></p>
      <!-- main content -->
      <div id="homepage">
        <!-- Services -->
        <section id="services" class="clear">
          <article class="one_third">
            <figure><img src="./images/suv.jpg" width="300" height="180" alt="">
              <figcaption>
                <h2>SUV</h2>
                <p>SUV stands for Sport Utility Vehicle. Conventionally, a sports utility vehicle (SUV) is a big car built on a body-on-frame chassis, sports increased ground clearance and offers off-roading capabilities to a certain extent. </p>
                <footer class="more"><a href="https://www.carsguide.com.au/suv">Read More</a></footer>
              </figcaption>
            </figure>
          </article>
          <article class="one_third">
            <figure><img src="./images/car.jpg" width="310" height="180" alt="">
              <figcaption>
                <h2>Hatchback</h2>
                <p>Our hatchback vehicles are all four doors. A hatchback is a car type with a rear door that opens upwards. They typically feature a four-door configuration, excluding the rear door. However, two-door hatchbacks are not uncommon.</p>
                <footer class="more"><a href="https://www.carsguide.com.au/hatchback">Read More</a></footer>
              </figcaption>
            </figure>
          </article>
          <article class="one_third lastbox">
            <figure><img src="./images/sedan.jpg" width="290" height="180" alt="">
              <figcaption>
                <h2>Sedan</h2>
                <p>Out of the different types of cars, a sedan (US) or a saloon (UK) is traditionally defined as a car with four doors and a typical boot/ trunk. Sedans have several sub-types such as notchback, fastback, compact, and sub-compact.</p>
                <footer class="more"><a href="https://www.carsguide.com.au/sedan">Read More </a></footer>
              </figcaption>
            </figure>
          </article>
        </section>

        <section id="intro" class="last clear">
          <article>
            <figure><img src="./images/feedback.jpg" width="450" height="300">
              <figcaption>
                <h2>We are always happy to hear feedbacks</h2>
                <p>We welcome your suggestions and ideas. With over a billion people on Facebook, feedback from community members like you helps us as we constantly improve our features and services. Though we can't respond to everyone who submits feedback, we review many of the ideas people send us to improve the PlusMe CarShare experience for everyone. We may use feedback or suggestions submitted by the community without any restriction or obligation to provide compensation for them or keep them confidential.</p>
              </figcaption>
            </figure>
          </article>
        </section>
        <!-- / Introduction -->
      </div>
      <!-- / content body -->
    </div>
  </div>

        <div class="row">
        @include('layouts.partials.footer')
        </div>
        <!-- end column -->

</div>
<!-- end container -->




@endsection
