
		$(".custom-select-nw").each(function () {
			var classes = $(this).attr("class"),
				id = $(this).attr("id"),
				name = $(this).attr("name");
			var template = '<div class="' + classes + '">';
			template += '<span class="custom-select-nw-trigger">' + $(this).attr("placeholder") + '</span>';
			template += '<div class="custom-options">';
			$(this).find("option").each(function () {
				template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
			});
			template += '</div></div>';

			$(this).wrap('<div class="custom-select-nw-wrapper"></div>');
			$(this).hide();
			$(this).after(template);
		});
		$(".custom-option:first-of-type").hover(function () {
			$(this).parents(".custom-options").addClass("option-hover");
		}, function () {
			$(this).parents(".custom-options").removeClass("option-hover");
		});
		$(".custom-select-nw-trigger").on("click", function () {
			$('html').one('click', function () {
				$(".custom-select-nw").removeClass("opened");

			});
			$(this).parents(".custom-select-nw").toggleClass("opened");
			event.stopPropagation();
		});
		$(".custom-option").on("click", function () {
			$(this).parents(".custom-select-nw-wrapper").find("select").val($(this).data("value"));
			$(this).parents(".custom-options").find(".custom-option").removeClass("selection");
			$(this).addClass("selection");
			$(this).parents(".custom-select-nw").removeClass("opened");
			$(this).parents(".custom-select-nw").find(".custom-select-nw-trigger").text($(this).text());
		});

		$(".custom-option span").on("click", function () {
			if ($('.custom-select-nw.sources').hasClass('opened')) {
				console.log('aaa');
				$('.fp-viewing-0').removeClass('pushy-open-right');
				$('body.fp-viewing-0').addClass('pushy-open-right1');
				$('.custom-select-nw.sources.testing').addClass('opened');



			}
		});

	