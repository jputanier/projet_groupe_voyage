document.getElementById('bob').addEventListener('click', function() {
    document.getElementById('article').style.opacity = '0.2';
    document.getElementById('div_choisir').style.display = 'block';
});

document.getElementById('close_choisir').addEventListener('click', function() {
    document.location.reload();
});
