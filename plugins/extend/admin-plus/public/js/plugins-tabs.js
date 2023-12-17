$(document).ready(function () {
    const adminplusFilterOptions = $('#adminplusFilterOptions');
    adminplusFilterOptions.append('<strong>' + SunlightVars.tabFilter['group'] + ':</strong> ');

    var types = ["all", "extend", "template", "language"];
    $.each(types, function (key, value) {
        adminplusFilterOptions.append('<a href="#" class="button" data-tab="admin-plugins-' + value + '">' + SunlightVars.tabFilter[value] + '</a> ');
    });

    adminplusFilterOptions.children('a').click(function () {
        const tabFilter = $(this).data('tab');

        adminplusFilterOptions.children('a').removeClass('active');
        $(this).addClass('active');

        if (tabFilter === 'admin-plugins-all') {
            $('#content').children('fieldset').show();
        } else {
            const content = $('#content');
            content.children('fieldset:not([id^=' + tabFilter + '])').hide();
            content.children('fieldset[id^=' + tabFilter + ']').show();
        }
        return false;
    });
});