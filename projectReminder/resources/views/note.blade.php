<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note - ReminderTA</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            background: #eee;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .comment-section {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .user-info {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-top: 10px;
        }
        .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .name {
            color: #007bff;
            font-weight: bold;
            margin-left: 300px;
        }
        .date {
            font-size: 11px;
            color: #6c757d;
        }
        .comment-text {
            font-size: 14px;
            padding: 10px;
            margin-left: 40px;
            margin-right: 40px;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-top: 1px solid #f1f1f1;
        }
        .actions div {
            cursor: pointer;
            color: #007bff;
        }
        .actions div:hover {
            color: blue;
        }
        .textarea {
            width: calc(100% - 50px);
            resize: none;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-right: 10px;
        }
        .button-container {
            text-align: right;
            padding: 10px;
            margin-right: 40px;
        }
        .button-container button {
            margin-left: 5px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="comment-section">
            <div class="user-info">
                <!-- <img src="https://i.imgur.com/RpzrMR2.jpg" width="40" alt="User  Image"> -->
                <div>
                    <span class="name">NOTE MAHASISWA</span>
                    <!-- <span class="date">Shared publicly - Jan 2020</span> -->
                </div>
            </div>
            @foreach($note as $n)
            <div class="comment-text">
                {{ $n->note }}
                <form action="{{ route('note.destroy', $n->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link" title="Delete Note">
                        <i class="fas fa-trash text-danger"></i>
                    </button>
                </form>
            </div>
            @endforeach
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script>
                document.querySelectorAll('.btn-link').forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault();
                        const form = this.closest('form');

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            </script>
            <div class="actions">
                <!-- <div><i class="fa fa-thumbs-o-up"></i> Like</div>
                <div><i class="fa fa-commenting-o"></i> Comment</div>
                <div><i class="fa fa-share"></i> Share</div> -->
            </div>
            <form action="{{ route('note.create') }}" method="post">
                @csrf
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="bg-light p-2">
                    <div style="margin-left: 40px;">
                        <!-- <img src="https://i.imgur.com/RpzrMR2.jpg" width="40" alt="User  Image"> -->
                        <textarea class="textarea" rows="5" cols="70" name="note" placeholder="Write a note..."></textarea>
                    </div>
                    <div class="button-container">
                        <button class="btn btn-primary btn-sm" type="submit">Add Note</button>
                        <a href="{{ url('/') }}"><button class="btn btn-outline-primary btn-sm" type="button">Back</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>