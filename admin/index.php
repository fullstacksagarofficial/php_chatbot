<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Add Hints</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
             />
             
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
        <div class="container my-5 ">
            <div class="row d-flex justify-content-center m-auto">
                <div class="col-md-6  ">
                    <form class="addhint border p-5" method="post">
                        <div class="inputGroup">
                            <input type="text" name="question" id="question" class=" shadow-none " required>
                            <label for="name">Add Question with multiple keywords !</label>
                        </div>

                        <div class="inputGroup">
                            <input type="text" name="answer" id="answer" class=" shadow-none " required>
                            <label for="name">Add Impressive Answer</label>
                        </div>

                        <input type="submit" value="Submit" class="form-control shadow-none btn btn-dark btn-md">
                        <div class="alert alert-primary success mt-4" role="alert" style="display: none;">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 ">

                    <div class="search">
                        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="Search" type="text" name="input" class="form-control shadow-none input"
                            id="live_search" placeholder="Search...">
                            <i class="fa-solid fa-rotate refetchdata" onclick="getdata()"></i>
                    </div>

                    <div class="border p-3">
                        <div class="loading" id="loading" style="display: none;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="successDelete" style="display: none;">

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Successfully Deleted !
                                <button type="button" class="btn-close btnClose" ></button>
                            </div>

                        </div>
                        <div class="errorDelete" style="display: none;">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Opps!</strong> Something Went Wrong !
                                <button type="button" class="btn- btnClose" d></button>
                            </div>
                        </div>
                        <div class="dynamicdata"></div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="plugn/jquery-edit.js"></script>
        <script src="script.js"></script>




    </body>

</html>