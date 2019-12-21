// username => huruf kecil & length 6
// email => huruf kecil & @
// password => length-min 8 & 1 huruf kapital

const checkUsername = username => {
    let Regex = /^[a-z]{6,6}$/;
    return Regex.test(username);
};

const checkEmail = email => {
    let Regex = /^([a-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    return Regex.test(email);
};

const checkPassword = password => {
    let Regex1 = /[0-9]/g;
    let Regex2 = /[a-z]/g;
    let Regex3 = /[A-Z]{1}/g;
    if (password.length > 8) {
        if (Regex1.test(password) && Regex2.test(password) && Regex3.test(password)) {
            return true;
        }
    }
    return false;
};

// username
console.log(checkUsername("akuapa") ? "benar" : "salah"); //benar
console.log(checkUsername("akuapaA") ? "benar" : "salah"); //salah
console.log(checkUsername("akupaA") ? "benar" : "salah"); //salah

// email
console.log(checkEmail("alpinnz@gmail.com") ? "benar" : "salah"); //benar
console.log(checkEmail("alpinnZ@gmail.com") ? "benar" : "salah"); //salah
console.log(checkEmail("alpinnzgmail.com") ? "benar" : "salah"); //salah

// email
console.log(checkPassword("testpassw111orA") ? "benar" : "salah"); //benar
console.log(checkPassword("11aadAwdwa") ? "benar" : "salah"); //benar
console.log(checkPassword("alpinnmailcom") ? "benar" : "salah"); //salah
