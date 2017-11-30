var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/softarc";
var obj;

function searchFunc(dep, arr) {
	var query = { "name": {$regex : dep+" => "+arr} };

	MongoClient.connect(url, function(err, db) {
		if (err) throw err;
		db.collection("connections").find(query).toArray(function(err, result) {
			if (err) throw err;
			obj = result;
			console.log(obj);
			db.close();
		});
	});
}

// searchFunc("Jakominiplatz", "Don Bosco Bahnhof");
