requirejs.config({
  baseUrl: 'public/assets/js/',
  paths: {
	  'jquery': '../libs/jquery/dist/jquery.min',
	  'foundation': '../libs/foundation/js/foundation/foundation',
	  'foundation.magellan': '../libs/foundation/js/foundation/foundation.magellan'
  },
  shim: {
	  'foundation': ['jquery'],
	  'foundation.magellan': ['foundation']
  }
});

// Start loading the main app file. Put all of
// your application logic in there.
requirejs(['modules/main']);