const api_key = '9c8ef40f733d4816972699040cf6cda6';

// GET REST API DARI http://newsapi.org/
$.getJSON('http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey='+api_key, function(data) {
    
	const count_article = data.articles.length;
	let article = "";
	
	for(let i = 0; i < count_article; i++) {
		article += 	`
							<div class="col s12 m4 article">
								<div class="card z-depth-2">
									<div class="card-image">
										<img src="${data.articles[i].urlToImage}" onerror="imgError(this)" height="130px">
									</div>
									<div class="card-content left-align light">
										<h6 class="mt-0 judul-artikel">${data.articles[i].title}</h6>
										<small><p class="right-align m-0">Sumber: ${data.articles[i].source.name}</p></small>
										<p class="isi-artikel">${data.articles[i].description}</p>
									</div>
									<div class="card-action right-align">
										<a class="m-0 waves-effect waves-light" href="${data.articles[i].url}" target="_blank">Baca Lebih Lanjut <i class="material-icons right">chevron_right</i></a>
									</div>
								</div>
							</div>
						`;
	}
	
	$('#article').html(article);
	
	$(".article").slice(0, 3).show();
});

// FUNGSI 'ON ERROR' KETIKA URL IMG GAGAL DIBUKA ATAU RUSAK
function imgError(image) {
	image.onerror 	= "";
	image.src 		= "./assets/img/image"+ (Math.floor(Math.random() * 3) + 1) +".jpeg";
	return true;
}