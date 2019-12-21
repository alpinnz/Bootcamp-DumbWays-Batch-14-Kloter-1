// Jika function dijalankan
// bilang(4, 3);
// akan dicetak di layar:
// 2, 3, 5, 7,
//     11, 13, 17, 19,
//     23, 29, 31, 37,

const bilang = (col, row) => {
    let temp = [];
    let max = 1000;

    for (let i = 1; i <= max; i++) {
        let kenabagi = 0;
        for (let j = 1; j <= i; j++) {
            if (i % j == 0) {
                kenabagi++;
            }
        }
        if (kenabagi == 2) {
            temp.push(i)
        }
    }

    let result = '';
    let colLog = 0;
    let rowLog = 0;
    for (let i = 0; i < temp.length; i++) {
        result += temp[i] + ',';
        colLog++;
        if (colLog == col) {
            console.log(result)
            result = '';
            colLog = 0;
            rowLog++;
        }
        if (rowLog == row) {
            break;
        }
    }
}


bilang(4, 3)