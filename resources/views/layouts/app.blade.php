<!doctype html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="{{ asset('assets/') }}"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title') | WorkSpace</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/logo.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('partials.sidebar')
            <div class="layout-page">
                @include('partials.navbar')
                <div class="content-wrapper">
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    @include('partials.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.getElementById("desktopMenuToggle");
            const icon = toggle.querySelector("i");

            toggle.addEventListener("click", function() {
                document.body.classList.toggle("layout-menu-collapsed");

                icon.classList.toggle("bx-chevron-left");
                icon.classList.toggle("bx-chevron-right");
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 'auto',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                selectable: true,
                editable: true,
                navLinks: true,

                events: [{
                        title: 'Meeting Tim',
                        start: '2026-01-10',
                        classNames: [
                            'bg-primary',
                            'text-primary',
                            'fw-semibold',
                            'border',
                            'border-primary',
                            'px-2',
                            'py-1',
                            'rounded-2'
                        ]
                    },
                    {
                        title: 'Deadline Project',
                        start: '2026-01-12',
                        classNames: [
                            'bg-danger',
                            'text-primary',
                            'fw-semibold',
                            'border',
                            'border-danger',
                            'px-2',
                            'py-1',
                            'rounded-2'
                        ]
                    },
                    {
                        title: 'Review',
                        start: '2026-01-15',
                        end: '2026-01-16',
                        classNames: [
                            'bg-success',
                            'text-primary',
                            'fw-semibold',
                            'border',
                            'border-success',
                            'px-2',
                            'py-1',
                            'rounded-2'
                        ]
                    }
                ],

                dateClick: function(info) {
                    document.getElementById('eventStartDate').value = info.dateStr;
                    let offcanvas = new bootstrap.Offcanvas(
                        document.getElementById('addEventSidebar')
                    );
                    offcanvas.show();
                }
            });

            calendar.render();
        });
        document.addEventListener('DOMContentLoaded', function() {

            const startPicker = flatpickr("#eventStartDate", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                time_24hr: true
            });

            const endPicker = flatpickr("#eventEndDate", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                time_24hr: true
            });

            flatpickr("#miniCalendar", {
                inline: true,
                mode: "range",
                dateFormat: "Y-m-d",
                onChange(selectedDates) {
                    if (selectedDates.length === 2) {
                        startPicker.setDate(selectedDates[0], true);
                        endPicker.setDate(selectedDates[1], true);
                    }
                }
            });

        });
    </script>

</body>

</html>
