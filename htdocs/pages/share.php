<?php

include '../include/header.php';

?>

<!-- ********** FORM TO SHARE EXPERIENCE ********** -->

<div class="container share-container">
    <div class="col s12 m12 12">
        <div class="input-field col">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" id="autocomplete-input" class="autocomplete" disabled="true">
            <label for="autocomplete-input">Nick name User</label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- TO DO : SWITCH ONLY CLICK ONE -->
            <div class="row">
                <div class="switch">
                    <h5><i class="material-icons prefix">check</i> Choose a category</h5>
                    <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        Activity
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="switch">
                    <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        Restaurant
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="switch">
                    <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        Destination
                    </label>
                </div>
            </div>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <h5><i class="material-icons prefix">vertical_align_bottom</i> Upload a picture</h5>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Upload</span>
                                <input type="file" />
                            </div>
                            
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text"
                                    placeholder="Upload file" />
                            </div>
                        </div>
                    </div>
                </form>       
            </div>
            <div class="row">
                <div class="my-rating-4" data-rating="2.5"></div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <h5><i class="material-icons prefix">border_color</i> Write your comment</h5>
                <div class="input-field col">
                    <i class="material-icons prefix">title</i>
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Title</label>
                </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <label for="description"></label>
                <textarea id="description" class="materialize-textarea" placeholder="Share your experience with the community" readonly="readonly"></textarea>
            </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(".my-rating-4").starRating({

        totalStars: 5,
        starShape: 'rounded',
        starSize: 40,
        emptyColor: 'lightgray',
        hoverColor: 'salmon',
        activeColor: 'crimson',
        useGradient: false

    });
</script>


<?php

    include '../include/footer.php';

?>