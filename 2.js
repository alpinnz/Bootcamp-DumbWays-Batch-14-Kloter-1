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

const checkPassword = password => { };

// username
console.log(checkUsername("akuapa") ? "benar" : "salah");
console.log(checkUsername("akuapaA") ? "benar" : "salah");
console.log(checkUsername("akupaA") ? "benar" : "salah");
// email
console.log(checkEmail("alpinnz@gmail.com") ? "benar" : "salah");
console.log(checkEmail("alpinnZ@gmail.com") ? "benar" : "salah");
console.log(checkEmail("alpinnzgmail.com") ? "benar" : "salah");
