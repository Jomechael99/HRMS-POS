import './bootstrap';
import 'preline'
import '../../vendor/masmerise/livewire-toaster/resources/js';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

import 'select2/dist/css/select2.min.css';
import 'select2/dist/js/select2.min.js';

import $ from 'jquery';
window.$ = window.jQuery = $;

import TomSelect from "tom-select";
import "tom-select/dist/css/tom-select.css";
import * as Livewire from "preline/src/utils/index.js";
import {Litepicker} from "litepicker";

document.addEventListener("DOMContentLoaded", function () {
    new TomSelect("#roomSelect", {});
    new TomSelect("#services", {});
});






