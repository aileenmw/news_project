$(document).ready(function() {
    $.ajax({
        url: 'handlers/api.php', 
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var content = '';
            data.results.forEach(function(article) {
                content += '<div class="article">';
                content += '<h2>' + article.title + '</h2>';
                if (article.image_url) {
                    content += '<img src="' + article.image_url + '" alt="' + article.title + '">';
                }
                content += '<p>' + article.description + '</p>';
                content += '<a href="' + article.link + '" target="_blank">Read more</a>';
                content += '</div>';
            });
            $('#content').html(content);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error: ' + textStatus);
        }
    });
});
