let res = document.getElementById("res");

document.getElementById("btn0").onclick = () => res.innerHTML += "0";
document.getElementById("btn1").onclick = () => res.innerHTML += "1";
document.getElementById("btnClr").onclick = () => res.innerHTML = "";

document.getElementById("btnSum").onclick = () => res.innerHTML += "+";
document.getElementById("btnSub").onclick = () => res.innerHTML += "-";
document.getElementById("btnMul").onclick = () => res.innerHTML += "*";
document.getElementById("btnDiv").onclick = () => res.innerHTML += "/";

document.getElementById("btnEql").onclick = () => {
    let expression = res.innerHTML;
    let operatorMatch = expression.match(/[+\-*/]/);
    if (operatorMatch) {
        let operator = operatorMatch[0];
        let [a, b] = expression.split(operator).map(bin => parseInt(bin, 2));
        let result;
        switch (operator) {
            case '+':
                result = a + b;
                break;
            case '-':
                result = a - b;
                break;
            case '*':
                result = a * b;
                break;
            case '/':
                result = Math.floor(a / b);
                break;
        }
        res.innerHTML = result.toString(2);
    }
};
