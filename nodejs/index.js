const array = Array.from({length: 9999}, () => Math.floor(Math.random() * 9999));

function bubble(arr) {
    const len = arr.length;

    for (let i = 0; i < len; i++) {
        for (let j = 0; j < len - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                const temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
    return arr;
}

console.time("BubbleSort")
bubble(array);
console.timeEnd("BubbleSort")
