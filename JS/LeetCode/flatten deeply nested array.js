/**
 * @param {Array} arr
 * @param {number} n
 * @return {Array}
 */
var flat = function (arr, n) {
    let result = [];

    function helper(subArr, currentDepth) {
        for (let el of subArr) {
            if (Array.isArray(el) && currentDepth < n) {
                helper(el, currentDepth + 1);
            } else {
                result.push(el);
            }
        }
    }

    helper(arr, 0);
    return result;
};