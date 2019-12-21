// sort_array(data)
// urutkan array terpendek ke terpanjang juga soft abjad

var data = [
    ['d', 'c', 'e', 'b', 'a'],
    ['k', 'i', 'j']
]
var datalain = [
    ['g', 'h', 'i', 'j'],
    ['a', 'c', 'b', 'e', 'd'],
    ['g', 'e', 'f']
]

const soft_array = (data) => {
    let min;

    // metode sSelection Sort (Ascending):
    for (let i = 0; i < data.length; i++) {
        min = i;

        // looping sekalian urutkan data.value array[index]
        data[i].sort();

        // cek data
        for (let j = i; j < data.length; j++) {
            // jika data index 2 lebih kecil dari index 1 ubah index yang akan di ganti
            if (data[j].length < data[min].length) {
                min = j;
            }
        }

        // jika index tidak sama indek 2 maka melakukan proses ubah data dari fungsi swap
        if (i != min) {
            swap(data, i, min);
        }
    }

    console.log(data)
}

const swap = (items, firstIndex, secondIndex) => {
    var temp = items[firstIndex];
    items[firstIndex] = items[secondIndex];
    items[secondIndex] = temp;
}

soft_array(data)
soft_array(datalain)


// [['k', 'i', 'j'], ['a', 'b', 'c', 'd', 'e']]
// [
//     ['g', 'e', 'f'],
//     ['g', 'h', 'i', 'j'],
//     ['a', 'b', 'c', 'd', 'e']
// ]