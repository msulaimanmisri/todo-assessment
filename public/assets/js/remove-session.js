window.addEventListener('beforeunload', function () {
    axios.post('/public/delete-session').then(function (response) {
        console.log(response.data);
    }).catch(function (error) {
        console.log(error);
    });
});

axios.post('/delete-session')
    .then(function (response) {
        console.log(response.data);
    })
    .catch(function (error) {
        console.log(error);
    });