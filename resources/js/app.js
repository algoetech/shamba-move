import './bootstrap';

import Alpine from 'alpinejs';
import DataTable from 'datatables.net-dt';
import DataTables from 'datatables.net';
import jqueryDataTables from 'datatables';
import Swal from 'sweetalert2';
import $ from 'jquery';
import jQuery from 'jquery';
import ApexCharts from 'apexcharts';
import Quill from 'quill';

import 'datatables.net-dt/css/dataTables.dataTables.min.css';

import '@fortawesome/fontawesome-free/css/all.min.css';
import 'datatables/media/css/jquery.dataTables.min.css';
import 'quill/dist/quill.snow.css';


window.Alpine = Alpine;
window.jQuery = window.$ = $;
window.DataTable = DataTable;
window.DataTables = DataTables;
window.Swal = Swal;
window.Quill = Quill;
window.ApexCharts = ApexCharts;


Alpine.start();
