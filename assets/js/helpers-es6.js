(() => {
    'use strict';

    /**
     * Helpers functions
     *
     * @description
     * isUndefined: (function(*): boolean),
     * isDefined: (function(*): boolean),
     * isBoolean: (function(*): boolean),
     * isString: (function(*): boolean),
     * isNumber: (function(*): boolean),
     * isArray: (function(*): (arg is Array<any> | boolean)),
     * isObject: (function(*): boolean),
     * isFunction: (function(*): boolean)
     */
    const Helpers = {
        /**
         *
         * @description
         * Determines if a reference is undefined.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is undefined.
         */
        isUndefined: value => typeof value === 'undefined',

        /**
         *
         * @description
         * Determines if a reference is defined.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is defined.
         */
        isDefined: value => typeof value !== 'undefined',

        /**
         *
         * @description
         * Checks if `value` is classified as a boolean primitive or object.
         *
         * @param {*} value - The value to check.
         * @returns {boolean} - Returns `true` if `value` is a boolean, else `false`.
         */
        isBoolean: value => typeof value === 'boolean' || value === true || value === false,

        /**
         *
         * @description
         * Determines if a reference is a `String`.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is a `String`.
         */
        isString: value => typeof value === 'string',

        /**
         *
         * @description
         * Determines if a reference is a `Number`.
         *
         * This includes the "special" numbers `NaN`, `+Infinity` and `-Infinity`.
         *
         * If you wish to exclude these then you can use the native
         * [`isFinite'](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/isFinite)
         * method.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is a `Number`.
         */
        isNumber: value => typeof value === 'number',

        /**
         *
         * @description
         * Determines if a reference is an `Array`.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is an `Array`.
         */
        isArray: value => Array.isArray(value) || value instanceof Array,

        /**
         *
         * @description
         * Determines if a reference is an `Object`. Unlike `typeof` in JavaScript, `null`s are not
         * considered to be objects. Note that JavaScript arrays are objects.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is an `Object` but not `null`.
         */
        isObject: value => {
            const type = typeof value;
            return value !== null && (type === 'object' || type === 'function');
        },

        /**
         *
         * @description
         * Determines if a reference is a `Function`.
         *
         * @param {*} value - Reference to check.
         * @returns {boolean} - True if `value` is a `Function`.
         */
        isFunction: value => typeof value === 'function',
    };
})();
