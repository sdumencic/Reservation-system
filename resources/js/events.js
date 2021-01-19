// Description: Collection of custom made functions to render and interact with
//              the Full Calendar JS library.

// IMPORTS ////////////////////////////////////////////////////////////////////
import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import bootstrapPlugin from "@fullcalendar/bootstrap";
import interactionPlugin from "@fullcalendar/interaction";
import "@fortawesome/fontawesome-free/css/all.css";
import * as moment from 'moment-timezone';

// IMPORTS ////////////////////////////////////////////////////////////////////

// Code ///////////////////////////////////////////////////////////////////////
let options = {
    title: "",
    start: "",
    end: "",
    userId: ""
};

const dateClick = info => {
    if (info.view.type !== "timeGridWeek") {
        alert("Switch to Week view to add appointments.");
        return;
    }
    // TODO: Hendlanje forma
    console.log(info);

    // Set the information
    options.title = "Basic Package";
    /* options.start = new moment(info.date).format('DD.MM.YYYY HH:mm:ss [GMT] Z');
    options.end = new moment(info.date).add(1, 'hour').format('DD.MM.YYYY HH:mm:ss [GMT] Z'); */
    options.start = new moment(info.date).format('YYYY-MM-DD HH:mm:ss');
    options.end = new moment(info.date).add(1, 'hour').format('YYYY-MM-DD HH:mm:ss');
    options.userIf = 0;

    // Show the modal
    $("#exampleModal").modal("show");
};

// Update the modal with our options data
$("#exampleModal").on("show.bs.modal", function(event) {
    var modal = $(this);
    modal.find("#title").val(options.title);
    modal.find("#start").val(options.start);
    modal.find("#end").val(options.end);
});

export const renderTimeGridView = () => {
    // Fetch our Calendar DIV from the DOM
    let calendarEl = document.getElementById("calendar");

    // Generate our Calendar Object
    var calendar = new Calendar(calendarEl, {
        plugins: [
            dayGridPlugin,
            timeGridPlugin,
            bootstrapPlugin,
            interactionPlugin
        ],
        themeSystem: "bootstrap", //standard/bootstrap
        initialView: "timeGridWeek",
        height: 650,
        firstDay: 1,
        eventDisplay: 'auto',
        allDay: false,

        events: [
            {
              title: 'Event1',
              start: '2021-01-20',
              color: 'yellow',   // an option!
          textColor: 'black', // an option!
            },
            {
              title: 'Event2',
              start: '2021-01-19',
              color: 'yellow',   // an option!
          textColor: 'black', // an option!
            }
            // etc...
          ],


        showNonCurrentDates: false,
        // Define Header Buttons
        headerToolbar: {
            start: "prev,today,next",
            center: "title",
            end: "timeGridWeek,dayGridMonth" // timeGridWeek,dayGridMonth
        },

        dayHeaderContent: (args) => {
            return moment(args.date).format('ddd D.MM.')
        },

        /* dayClick: function(date, event, view) {
            $('#dialog').dialog({
                title: 'Add Event',
                width: 600,
                height: 700,
                modal: true,
                show: {effect: 'clip', duration: 350},
                hide: {effect: 'clip', duration: 250}
            })
        }, */

        slotLabelFormat: {
            hour: 'numeric',
            minute: '2-digit',
            meridiem: false,
            hour12: false
        },

        // User interaction handling
        selectable: false,
        dateClick: info => {
            dateClick(info);
        },
        select: function(info) {
            alert("selected " + info.startStr + " to " + info.endStr);
        }

        // Add new function TODO: SPINFOFF IN ANOTHER FUNTION
    });

    // Render the Calendar Object
    calendar.render();
};
// CODE ///////////////////////////////////////////////////////////////////////
