const onClickLink = (id) => {
    $(document).ready(function() {
        window.location.href = `/product/detail?id=${id}`;
    });
};