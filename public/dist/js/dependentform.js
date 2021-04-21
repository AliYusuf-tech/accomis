$(".other_occupation2").hide();
$(".other_education2").hide();
$(".other_reasons2").hide();
$(".other_treatment2").hide();
$(".llin_true").hide();
$(".llin_others2").hide();
$(".ipt_true").hide();
$(".swallow_false").hide();
$(".other_services").hide();
$(".malaria_true").hide();
$(".malaria_test_no_input").hide();
$(".malaria_false").hide();
$(".arthemisinin_therapy_true").hide();
$(".arthemisinin_therapy_false").hide();
$(".arthemisinin_therapy_show").hide();
$(".arthemisinin_therapy_show_yes").hide();
$(".arthemisinin_therapy_show_no").hide();
$(".other_causes").hide();
$(".choice_cause").hide();

$(document).ready(function() {
    //for occupation element
    $('#occupation select[name="occupation"]').change(function() {
        if (
            $('#occupation select[name="occupation"] option:selected').val() ==
            ""
        ) {
            $(".other_occupation2").show();
        } else {
            $(".other_occupation2").hide();
            $(".field1").val("");
        }
    });

    //for education element
    $('#education select[name="educational_bg"]').change(function() {
        if (
            $(
                '#education select[name="educational_bg"] option:selected'
            ).val() == ""
        ) {
            $(".other_education2").show();
        } else {
            $(".other_education2").hide();
            $(".field2").val("");
        }
    });

    //for education element
    $('#what_did_you_come_for select[name="what_did_you_come_for"]').change(
        function() {
            if (
                $(
                    '#what_did_you_come_for select[name="what_did_you_come_for"] option:selected'
                ).val() == ""
            ) {
                $(".other_reasons2").show();
            } else {
                $(".other_reasons2").hide();
                $(".field3").val("");
            }
        }
    );

    //for education element
    $(
        '#what_treatment_did_you_recieve select[name="what_treatment_did_you_recieve"]'
    ).change(function() {
        if (
            $(
                '#what_treatment_did_you_recieve select[name="what_treatment_did_you_recieve"] option:selected'
            ).val() == ""
        ) {
            $(".other_treatment2").show();
        } else {
            $(".other_treatment2").hide();
            $(".field4").val("");
        }
    });

    //recieve_llin section
    $(".llin_recieve_yes").click(function() {
        $(".llin_true").show();
    });
    $(".llin_recieve_no").click(function() {
        $(".llin_true").hide();
    });

    $('.llin_true select[name="llin_recieve_location"]').change(function() {
        if (
            $(
                '.llin_true select[name="llin_recieve_location"] option:selected'
            ).val() == ""
        ) {
            $(".llin_others2").show();
        } else {
            $(".field5").val("");

            $(".llin_others2").hide();
        }
    });

    //ipt section
    $(".ipt_recieve_yes").click(function() {
        $(".ipt_true").show();
    });
    $(".ipt_recieve_no").click(function() {
        $(".ipt_true").hide();
    });

    //sp_swallow section
    $(".sp_swallow_yes").click(function() {
        $(".swallow_false").hide();
    });
    $(".sp_swallow_no").click(function() {
        $(".swallow_false").show();
    });
    $('.swallow_false select[name="services"]').change(function() {
        if (
            $('.swallow_false select[name="services"] option:selected').val() ==
            ""
        ) {
            $(".other_services").show();
        } else {
            $(".other_services").hide();
            $(".field6").val("");
        }
    });

    //smc section
    $(".smc1").click(function() {
        $(".malaria_true").show();
    });
    $(".smc2").click(function() {
        $(".malaria_true").hide();
    });

    //malaria_test section
    $(".malaria_test_yes").click(function() {
        $(".malaria_test_no_input").hide();
        $(".malaria_false").show();
        $(".field7").val("");
    });
    $(".malaria_test_no").click(function() {
        $(".malaria_test_no_input").show();
        $(".malaria_false").hide();
    });
    $(".malaria_test_not_sure").click(function() {
        $(".malaria_test_no_input").hide();
        $(".malaria_false").hide();
        $(".field7").val("");
    });

    //malaria_test section
    $(".arthemisinin_yes").click(function() {
        $(".arthemisinin_therapy_true").show();
        $(".arthemisinin_therapy_false").hide();
    });
    $(".arthemisinin_no").click(function() {
        $(".arthemisinin_therapy_true").hide();
        $(".arthemisinin_therapy_false").show();
        $(".arthemisinin_therapy_show").hide();
    });

    //arthemisinin_therapy section
    $(".arthemisinin_yes").click(function() {
        $(".arthemisinin_therapy_true").show();
        $(".arthemisinin_therapy_false").hide();
        $(".field200").val("");
    });
    $(".arthemisinin_no").click(function() {
        $(".arthemisinin_therapy_true").hide();
        $(".arthemisinin_therapy_false").show();
        $(".field8").val("");
        $(".field9").val("");
    });
    //arthemisinin_therapy section2
    $(".arthemisinin_drug_finish_yes").click(function() {
        $(".arthemisinin_therapy_show").show();
        $(".arthemisinin_therapy_show_yes").show();
        $(".arthemisinin_therapy_show_no").hide();
        $(".field9").val("");
    });
    $(".arthemisinin_drug_finish_no").click(function() {
        $(".field8").val("");
        $(".arthemisinin_therapy_show").show();
        $(".arthemisinin_therapy_show_no").show();
        $(".arthemisinin_therapy_show_yes").hide();
    });

    $('.satisfaction_level select[name="satisfaction_level"]').change(
        function() {
            $(".choice_cause").show();
        }
    );

    $('.choice_cause select[name="insatisfaction_cause"]').change(function() {
        if (
            $(
                '.choice_cause select[name="insatisfaction_cause"] option:selected'
            ).val() == ""
        ) {
            $(".other_causes").show();
        } else {
            $(".other_causes").hide();
            $(".field10").val("");
        }
    });
});
