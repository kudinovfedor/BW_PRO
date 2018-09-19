(function (w, d, ajax) {
    'use strict';

    d.addEventListener('DOMContentLoaded', function () {
        ajaxContactForm('#contact-form');
    });

    function ajaxContactForm(selector) {

        var form = d.querySelector(selector);

        if (form) {

            var fields = form.querySelectorAll('input, select, textarea');

            var data = {
                'action': ajax.action,
                'nonce': ajax.nonce,
            };

            var field, params, xhr, i;

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                for (i = 0; i < fields.length; i++) {
                    field = fields[i];
                    data[field.name] = field.value;
                }

                params = getParams(data);

                xhr = new XMLHttpRequest();
                xhr.open('POST', ajax.url, true);
                xhr.responseType = 'text';
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

                xhr.onload = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                    }
                };

                xhr.onerror = function () {
                    console.log(xhr.response);
                };

                xhr.send(params);

                /*$.ajax({
                    'url': ajax.url,
                    'method': 'POST',
                    'dataType': 'html',
                    'data': data,
                })
                    .done(function (data, textStatus, jqXHR) {
                        //console.log('[Method Done]', data, textStatus, jqXHR);
                        console.log(data);
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        //console.log('[Method Fail]', jqXHR, textStatus, errorThrown);
                        console.log(textStatus, errorThrown);
                    })
                    .always(function () {
                        //console.log('[Method Always]');
                    });*/
            });

        }

        function getParams(object) {
            var encodedString = '', prop;

            for (prop in object) {
                if (object.hasOwnProperty(prop)) {
                    if (encodedString.length > 0) {
                        encodedString += '&';
                    }
                    encodedString += encodeURI(prop + '=' + object[prop]);
                }
            }

            return encodedString;
        }
    }

})(window, document, window.jpAjax);
