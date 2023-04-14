// DESIGNED BY ATECHSEVA
// OWNER : developer.sagar10@gmail.com || atechseva@gmail.com
// website: https://www.atechseva.com/
function tableedit() {
    $("#tablee").Tabledit({
        deleteButton: !1,
        editButton: !1,
        columns: {
            identifier: [0, "id"],
            editable: [
                [1, "question"],
                [2, "reply"],
            ],
        },
        url: "action/live_edit.php",
        hideIdentifier: !0,
    });
}
function getdata(t) {
    $("#loading").show(),
        $.ajax({
            type: "post",
            url: "action/getdata.php",
            data: { page: t },
            success: function (t) {
                $("#loading").fadeOut(), $(".dynamicdata").html(t), tableedit();
            },
        });
}
$(document).ready(function () {
    $("#live_search").keydown(function () {
        var t = $(this).val();
        $("#loading").show(),
            $.ajax({
                type: "POST",
                url: "action/getdata.php",
                data: { input: t },
                success: function (t) {
                    $("#loading").fadeOut(), $(".dynamicdata").html(t), tableedit();
                },
            });
    }),
        $(document).on("click", ".deleteHint", function (t) {
            t.preventDefault();
            var e = $(this).closest("tr").find(".delete_id_value").val();
            Swal.fire({ title: "Are you sure?", text: "You won't be able to revert this!", icon: "warning", showCancelButton: !0, confirmButtonColor: "#5d6", cancelButtonColor: "#F0754F", confirmButtonText: "Yes, delete it!" }).then(
                (t) => {
                    t.isConfirmed &&
                        $.ajax({
                            type: "POST",
                            url: "action/delete.php",
                            data: { delete_id: e },
                            success: function (t) {
                                "success" == t.trim() ? ($(".hintRemove_" + e).fadeOut("slow"), $(".successDelete").show()) : $(".errorDelete").show();
                            },
                        });
                }
            );
        });
}),
    $(document).on("click", ".btnClose", function () {
        $(".successDelete").fadeOut(), $(".errorDelete").fadeOut();
    }),
    getdata(),
    $(document).on("click", ".page-item", function () {
        getdata($(this).attr("id"));
    }),
    $(".addhint").submit(function (t) {
        t.preventDefault(),
            $.ajax({
                type: "post",
                url: "action/addhint.php",
                data: $(".addhint").serialize(),
                success: function (t) {
                    $(".addhint")[0].reset(), getdata(), $(".success").show(), $(".success").html("Data Added");
                },
            });
    });
