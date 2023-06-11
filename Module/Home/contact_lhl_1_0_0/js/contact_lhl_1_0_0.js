function sendAPI(registerInfo) {
    value1 = registerInfo.name.value;
    value2 = registerInfo.phone.value;
    value3 = registerInfo.company.value;
    value4 = registerInfo.website.value;
    value5 = registerInfo.country.value;
    value6 = registerInfo.email.value;
    value7 = registerInfo.note.value;
    value8 = new Date().toLocaleDateString();
    value9 = window.location.href;
    name1 = 'Name';
    name2 = 'Phone';
    name3 = 'Company';
    name4 = 'Website';
    name5 = 'Country';
    name6 = 'Email';
    name7 = 'Note';
    name8 = 'Date Create';
    name9 = 'Link';

    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };

    fetch(`https://script.google.com/macros/s/AKfycbwhPyPfv6H3Xu8RJ_nfHIpurklnyn0cfPs1GHNht9VQt5vRkI9pJo5kzf7ENeGr1W6aBw/exec?${name1}=${value1}&${name2}=${value2}&${name3}=${value3}&${name4}=${value4}&${name5}=${value5}&${name6}=${value6}&${name7}=${value7}&${name8}=${value8}&${name9}=${value9}`, requestOptions)
        .then(response => response.text())
        .then(result => {
            console.log(result);
        })
        .catch(error => console.log('error', error));
}