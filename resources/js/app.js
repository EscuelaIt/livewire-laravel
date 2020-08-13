/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.livewire.on('close-form', function(){
    var element = document.getElementById("modal-project");
    element.classList.add("hidden");
});

var Turbolinks = require("turbolinks")
Turbolinks.start()