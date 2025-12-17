import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

const $ = require('jquery');
global.$ = global.jQuery = $;
 
// Bootstrap
import 'bootstrap/dist/js/bootstrap.js';
 
// Datatable (plugin jquery) pour bootstrap
import 'datatables.net/js/jquery.dataTables.js';
import 'datatables.net-bs5/js/dataTables.bootstrap5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.css';
import '@hotwired/turbo'; // Active Turbo Drive


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
