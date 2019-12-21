// username => huruf kecil & length 6
// email => huruf kecil & @
// password => length-min 8 & 1 huruf kapital

const checkUsername = username => {
    let Regex = /[a-z]/g;
    if (username.length === 6) {
        return Regex.exec(username);
    } else {
        return false;
    }
};

const checkEmail = email => { };

const checkPassword = password => { };
// console.log(is_username_valid('eka%') ? 'benar' : 'salah') //salah
console.log(checkUsername("akusapa") ? "benar" : "salah");
