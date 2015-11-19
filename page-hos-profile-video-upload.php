<?php 
/**
 * Template Name: HOS Profile - Video Upload
 * This template will provide users with login functionality
 */
get_header();?>
<div class="page-main page-account-video-upload">
	<div class="tab-pane fade" id="tab_video_upload">
                                <div id="tab_video_upload-wrapper">
                                    <div id="video-upload-text">
                                        <h3 >Why?</h3>
                                        <div id="video-upload-text-tab">
                                            <p>Our clients value employess videos and we hope that you choose to upload one of your own.
                                                Up-loading a video wiill give companies a better idea of why you are an amazing fit.</p>
                                            <br>
                                            <p>We will only share your video link to our clients.</p>
                                            <br>
                                            <p class="video-upload-colored-text">Make sure to Keep your video settings set up so that only those with the link can see it.</p>
                                            <br>
                                        </div>
                                        <h3 >Resources and links:</h3>
                                        <br>
                                        <div id="video-upload-text-tab">
                                            <p>Youtube and other sites provide a variaty of resources that will make this an easy process.</p>
                                            <br>
                                            <p> Please check out the links below to get started!</p>
                                            <p class="video-upload-colored-text"> link http://stackoverflow.com/questions/11963780/displayinline-not-working</p>
                                        </div>
                                    </div>
                                    <div id="video-upload-text-example-video">
                                        <p>example video</p>
                                        <iframe width="200" height="200" src="https://www.youtube.com/embed/phyU2BThK4Q" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                 </div>
                                 <div id="video-upload-submit">
                                        <p id="video-upload-p"> Link to the Video: </p>
                                        <input type="text" id="video-upload-link-input" size="30">
                                         <input type="submit" value="Save Link" id="video-upload-link-submit">
                                 </div>
                        </div>
                            <style>
                            #tab_video_upload-wrapper{
                                display:block;
                            }
                                #video-upload-text{
                                    float: left;
                                    width:60%;
                                }
                                #video-upload-text-example-video{
                                    float: left;
                                    text-align: center;
                                    padding-top: 25%;
                                    padding-bottom: 25%;
                                    width:40%;

                                }
                                #video-upload-text-tab{
                                    padding-left: 5%;
                                }
                                .video-upload-colored-text{
                                    color:#337ab7;
                                }
                                #video-upload-submit{
                                    display: block;
                                    padding-left: 3%;
                                }
                                #video-upload-link-submit{
                                    display: inline;
                                    border-radius: 5px;
                                    background-color:#337ab7;
                                    color:white;
                                }
                                #video-upload-link-input{
                                    display: inline;
                                    margin-left: 10%;
                                    margin-right: 10%;
                                    border-radius: 5px;
                                    border-color: #337ab7;
                                }
                                #video-upload-p{
                                    display: inline;
                                }
                            </style>
</div>
<?php get_footer();?>