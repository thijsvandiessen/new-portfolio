$(document).ready(function() {
	wikiSearchAPI();
});

//var articleTitle = ""; //global

function wikiSearchAPI() {
	$("#searchterm").keyup(function(event){
		var q = $("#searchterm").val();
		$.getJSON("http://en.wikipedia.org/w/api.php?callback=?",{
			format: "json",
			action: "query",
			srsearch: q,
			srlimit: 1,
			list: "search",
		},

		function(data) {
			$("#title").empty();
			$("#title").append("<p>Results for <strong>" + q + "</strong></p>");
			$.each(data.query.search, function(i,item){
				$("#title").append('<div><a href="http://en.wikipedia.org/wiki/' + encodeURIComponent(item.title) + '">' + item.title + '</a> ' + item.snippet +'</p></div>');
				
				console.log(data.query.search);

				getArticle(item.title)

<<<<<<< HEAD


			}); // end of each
		}); // end of f data
	});

}


=======
			}); // end of each
		}); // end of f data
	});
}

>>>>>>> refs/remotes/origin/master
function getArticle(x) {

	console.log(x);

	$.getJSON("http://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&titles=" + x + "&exintro=", {
		//json
<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/master
	},

	function(data) {
		// var items = [];
		$("#article").empty();
		$.each(data.query.pages, function(key, val) {
			$("#article").append('<article>' + val.extract +'</article>');

		});

	});
};