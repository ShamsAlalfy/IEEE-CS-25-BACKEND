/**
 * @param {Object|Array} obj
 * @return {Object|Array}
 */
var compactObject = function(obj) {
    if (Array.isArray(obj)) {
        return obj
            .filter(Boolean)
            .map(val => (typeof val === 'object' && val !== null ? compactObject(val) : val));
    }
    if (typeof obj === 'object' && obj !== null) {
        let res = {};
        for (let key in obj) {
            if (Boolean(obj[key])) {
                res[key] = (typeof obj[key] === 'object') ? compactObject(obj[key]) : obj[key];
            }
        }
        return res;
    }
    return obj;
};
