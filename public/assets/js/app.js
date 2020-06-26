$().ready(function () {
    $('[data-toggle="tooltip"]').tooltip()
    // Toggle Sidebar

    $('.toggle-sidebar').on('click', function () {
        $('body').toggleClass('sidebar-collapse');
    });

    $('.toggle-calendar').on('click', function () {
        $('#infoagenda').toggleClass('active');
    });

    // Dropdown

    $('.toggle-dropdown').on('click', function () {
        var n = $(this).next();

        if (n.hasClass('active')) {
            n.removeClass('active');
            $('.dropdownsub-wrapper').removeClass('active');
        } else {
            $('.dropdown-wrapper').removeClass('active');
            n.addClass('active');
        }
    });
    $('.toggle-dropdownsub').on('click', function () {
        var n = $(this).next();

        if (n.hasClass('active')) {
            n.removeClass('active');
        } else {
            $('.dropdownsub-wrapper').removeClass('active');
            n.addClass('active');
        }
    });
    // Hide dropdown out of element
    $(document).on("click", function (event) {
        if (!$(event.target).closest(".dropdown").length) {
            $(".dropdown-wrapper").removeClass("active");
            $('.dropdownsub-wrapper').removeClass('active');
        }
    });

    // Floating Button
    $('.toggle-btn-float').on('click', function () {
        var n = $(this).closest('.btn-float-group');
        n.toggleClass('active');
    })
})

// ======= Vanilla Calendar =======

let calendar = new VanillaCalendar({
    selector: "#eventCalendar",
    onSelect: (data, elem) => {
        console.log(data) // console.log(data, elem)
    }
})
