define(function (require) {
    var $ = require('jquery');

    $(document).on('click', '.elgg-login-to-post', function (e) {
        e.preventDefault();
        $('#login-dropdown a:first').trigger('click');
    });
});
