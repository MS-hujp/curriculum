//課題1

let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
    for(let i = 0; i < numbers.length; i++){
    if(numbers[i] % 2 == 0){
        console.log(numbers[i] + 'は偶数です');
    }
}
}
isEven();

//課題2

class car{
    constructor(gas,num){
      this.gas = gas;
      this.num = num;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です。`)
    }
}

let kuruma = new car(100, 12345);
kuruma.getNumGas();
