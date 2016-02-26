// OOP Way
var scrollNeeded = [];
var elems = {};
var latest = {};
fbChat = {
    bootChat: function () {
        var chatArea = $('.chatMsg'),
                that = this;

        // Load the messages every 5 seconds
        setInterval(this.getMessages, 5000);

        // Bind the keyboard event
        chatArea.bind('keydown', function (event) {
            if (event.keyCode === 13 && event.shiftKey === false) {
                var message = $(this).val();
                //				console.log(message);
                //
                if (message.length !== 0) {
                    var userid = $(this).closest('.container1').find(".messageto").val();
                    that.sendMessage(message, userid);
                    //					scrollNeeded[userid] = true;
                    event.preventDefault();
                } else {
                    alert('Provide a message to send!');
                }
            }
        });
    },
    sendMessage: function (message, userid) {
        var that = this;
        $.ajax({
           url: 'http://dealbase.ca/chat/public/ajax/add_msg.php',
//            url: 'http://localhost:8888/oDeskWork/Mike-DealBased/chat/public/ajax/add_msg.php',
            method: 'post',
            data: {
                msg: message,
                msgto: userid
            },
            success: function (data) {
                //				console.log(data);
                $('.chatMsg').val('');
                that.getMessages();
                $(".msg-wgt-body").animate({
                    scrollTop: $(document).height() - $(window).height()
                });

            }
        });
    },
    getMessages: function () {

        $('.container1').each(function () {
            var container = this;
            var userid = $(this).find(".messageto").val();
            //			console.log(userid);
            var url = 'http://dealbase.ca/chat/public/ajax/get_messages.php?msgto=' + userid;
//            var url = 'http://localhost:8888/oDeskWork/Mike-DealBased/chat/public/ajax/get_messages.php?msgto=' + userid;
            $.ajax({
                url: url,
                method: 'GET',
                success: function (data) {
                    $(container).find('.msg-wgt-body').html(data);
                    //					if (scrollNeeded[userid]) {
                    //						$(container).find('.msg-wgt-body').scrollTop($(container).find('.msg-wgt-body')[0].scrollHeight);
                    //						scrollNeeded[userid] = false;
                    //					}
                    popIfNew();
                    //nikos=1
                    //					shabbir=2
                    $(".msg-wgt-body").animate({
                        //  code delteled to scroll            scrollTop: $(document).height() - $(window).height()
                    });
                    //thanks to rheller1103@gmail.com

                }
            });

        });


    }
};

// Initialize the chat
fbChat.bootChat();

// Procedural way
/**
 * Add a new chat message
 *
 * @param {string} message
 */
function send_message(message) {
    $.ajax({
        url: 'http://dealbase.ca/chat/public/ajax/add_msg.php',
//        url: 'http://localhost:8888/oDeskWork/Mike-DealBased/chat/public/ajax/add_msg.php',
        method: 'post',
        data: {
            msg: message
        },
        success: function (data) {
            $('#chatMsg').val('');
            get_messages();
        }
    });
}

/**
 * Get's the chat messages.
 */
function get_messages() {
    $.ajax({
           url: 'http://dealbase.ca/chat/public/ajax/get_messages.php',
//        url: 'http://localhost:8888/oDeskWork/Mike-DealBased/chat/public/ajax/get_messages.php',
        method: 'GET',
        success: function (data) {
            $('.msg-wgt-body').html(data);
        }
    });
}

/**
 * Initializes the chat application
 */
function boot_chat() {
    var chatArea = $('#chatMsg');

    // Load the messages every 5 seconds
    setInterval(get_messages, 20000);

    // Bind the keyboard event
    chatArea.bind('keydown', function (event) {
        // Check if enter is pressed without pressing the shiftKey
        if (event.keyCode === 13 && event.shiftKey === false) {
            var message = chatArea.val();
            // Check if the message is not empty
            if (message.length !== 0) {
                send_message(message);
                event.preventDefault();
            } else {
                alert('Provide a message to send!');
                chatArea.val('');
            }
        }
    });
}
window.addEventListener("load", function () {
    popIfNew(1);
});

function popIfNew(bool) {
    a = [].slice.call(document.querySelectorAll(".container1"));
    a.forEach(function (e) {
        latest[e.getAttribute("id")] = e.querySelectorAll(".msg").length;
    });
    for (i in latest) {
        if (!bool) {
            if (i in elems && elems[i] == latest[i])
                continue;
            else {
                elems[i] = latest[i];
                var elem = document.querySelector("#" + i);
                var rows = elem.querySelectorAll('.msg')
                if (rows[rows.length - 1].dataset.sender && rows[rows.length - 1].dataset.user && rows[rows.length - 1].dataset.sender != rows[rows.length - 1].dataset.user) {
                    elem.style.display = "inline-block";
                    document.querySelector("#chatAudio").play();
                }
            }
            ;
        } else
            elems[i] = latest[i];
    }
}
var extras = [];

function noMoreThanThree() {
    if (order.length > 3) {
        var oldest = order.shift();
        extras.push(oldest);
        oldest.style.display = "none";
    }
    var unames = [];
    extras.forEach(function (e) {
        var uname = /xbox(.+)$/.exec(e.getAttribute("id"))[1];
        unames.push(uname);
    });
    var html = "";
    unames.forEach(function (uname) {
        html += "<div style='color:white'>" + uname + "</div>"
    });
    document.querySelector("#extraUsers").innerHTML = html;
}
document.querySelector("#extraUsers").addEventListener("click", function (e) {
    var user = document.querySelector("#xbox" + e.target.innerText);
    order.push(user)
    if (extras.indexOf(user) > -1) {
        extras.splice(extras.indexOf(user), 1);
    }
    user.style.display = "inline-block";
    noMoreThanThree();
})
// Initialize the chat
boot_chat();
