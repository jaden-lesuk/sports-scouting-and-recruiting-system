$(document).ready(function () {
	$("button#btn-beef").click(function () {
		event.preventDefault();
		$("div.vegan ,div.chicken, div.mutton, div.fish").hide();
		$("div.beef").show();
	});

	$("button#btn-vegan").click(function () {
		event.preventDefault();
		$("div.beef ,div.chicken, div.mutton, div.fish").hide();
		$("div.vegan").show();
	});

	$("button#btn-chicken").click(function () {
		event.preventDefault();
		$("div.beef ,div.vegan, div.mutton, div.fish").hide();
		$("div.chicken").show();
	});

	$("button#btn-fish").click(function () {
		event.preventDefault();
		$("div.beef ,div.vegan, div.mutton, div.chicken").hide();
		$("div.fish").show();
	});

	$("button#btn-mutton").click(function () {
		event.preventDefault();
		$("div.beef ,div.vegan, div.chicken, div.fish").hide();
		$("div.mutton").show();
	});

	$("button#btn-all").click(function () {
		event.preventDefault();
		$("div.all-recipes").show();
	});

	$("button#btn-approve").click(function () {
		event.preventDefault();
		$("#recipe1div.approve-block").hide();
		swal("Recipe approved!","You have approved this recipe","success");
	});

	$("button#btn-delete").click(function () {
		event.preventDefault();
		$("div#recipe2").hide();
		swal("Recipe deleted","You have deleted this recipe","warning");
	});

	$("button#btn-responded").click(function () {
		event.preventDefault();
		$("#contact1div.respond-block").hide();
		swal("Marked as responded!","You have responded to this!","success");
	});

	$("button#btn-ignore").click(function () {
		event.preventDefault();
		$("div#contact2").hide();
		swal("Marked as ignored!","You have ignored this message","warning");
	});
});