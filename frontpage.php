<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the 145Design Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage 145Design
 * @since 1.0.0
 */

get_header(); ?>
<div id="particles-js"></div>
<div class="header" id="top">
    <img src="<?php the_field('background_blob'); ?>" alt="">
    <div class="middle">
        <h1><?php the_field('title_1'); ?></h1>
        <h1><?php the_field('title_2'); ?></h1>
        <h2><?php the_field('subtitle'); ?></h2>
        <div class="mt-10 text-center">
            <a class="bg-blue py-3 px-12 rounded-full text-black transition-colors duration-500"
               href="<?php the_field('button_link'); ?>"><?php the_field('button_title'); ?></a>
        </div>
    </div>
</div>

<h1 class="text-center text-white opacity-60 text-6xl lg:text-8xl uppercase z-0 relative"><?php the_field('section_title_1'); ?></h1>
<div class="-mt-10 lg:-mt-12 sm:w-1/2 lg:w-1/4 text-center mx-auto relative">
    <img class="z-10" src="<?php the_field('headshot'); ?>" alt="">
</div>

<div class=" p-5 sm:w-1/2 text-center mx-auto relative">
    <div class="text-white py-2 text-left bio">
        <?php the_field('bio'); ?>
    </div>
</div>

<img src="<?php the_field('skill_top_image'); ?>" alt="Top Squiggle (it's a word)">
<div class="bg-purple text-white">
    <h1 class="text-center opacity-60 text-6xl lg:text-8xl pt-5 uppercase"><?php the_field('section_title_2'); ?></h1>
    <div class="m-4 md:my-10 max-w-7xl text-center mx-auto">
        <div class="grid grid-cols-12 lg:-mt-14">

            <div class="col-span-12 md:col-span-4 p-5 text-center">
                <?php if (have_rows('skill_1')): ?>
                    <?php while (have_rows('skill_1')): the_row(); ?>
                        <h2 class="massive opacity-20">
                            <?php the_sub_field('abbreviation'); ?>
                        </h2>

                        <h3 class="text-2xl roboto uppercase -mt-40 lg:-mt-52">
                            <?php the_sub_field('title'); ?>
                        </h3>

                        <p class=" mt-20">
                            <?php the_sub_field('subtitle'); ?>
                        </p>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-span-12 md:col-span-4 p-5 text-center">
                <?php if (have_rows('skill_2')): ?>
                    <?php while (have_rows('skill_2')): the_row(); ?>
                        <h2 class="massive opacity-20">
                            <?php the_sub_field('abbreviation'); ?>
                        </h2>

                        <h3 class="text-2xl roboto uppercase -mt-40 lg:-mt-52">
                            <?php the_sub_field('title'); ?>
                        </h3>

                        <p class=" mt-20">
                            <?php the_sub_field('subtitle'); ?>
                        </p>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


            <div class="col-span-12 md:col-span-4 p-5 text-center">
                <?php if (have_rows('skill_3')): ?>
                    <?php while (have_rows('skill_3')): the_row(); ?>
                        <h2 class="massive opacity-20">
                            <?php the_sub_field('abbreviation'); ?>
                        </h2>

                        <h3 class="text-2xl roboto uppercase -mt-40 lg:-mt-52">
                            <?php the_sub_field('title'); ?>
                        </h3>

                        <p class=" mt-20">
                            <?php the_sub_field('subtitle'); ?>
                        </p>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <img src="<?php the_field('projects_top_squiggle'); ?>" alt="Top Squiggle (it's a word)" class="w-full">
</div>

<div class="bg-black-background text-white">
    <h1 class="text-center opacity-60 text-6xl lg:text-8xl pt-5 uppercase mb-20"><?php the_field('section_title_3'); ?></h1>
    <div class="m-4 md:my-10 max-w-7xl text-center mx-auto">


        <?php
        if (have_rows('project')):
            while (have_rows('project')) :
                the_row(); ?>

                <div class="grid grid-cols-12 mb-20">
                    <div class="col-span-12 md:col-span-5 p-5 text-center">
                        <div class="container">

                            <!-- Start of the thumbnail-->
                            <div class="featured-img">

                                <!-- Check to see IF link exists and link it if it does, hide <a> if it doesn't. -->
                                <?php if (get_sub_field('live_link')): ?>

                                <!-- If link exists, wrap image in it. -->
                                <a href="<?php the_sub_field('live_link'); ?>" target="_blank">
                                    <?php endif; ?>

                                    <!-- The Actual image + Alt tag.-->
                                    <img class="drop-shadow-2xl rounded-md"
                                         src="<?php the_sub_field('site_image'); ?>"
                                         alt="<?php the_sub_field('site_title'); ?> Site Photo">

                                    <!-- Add closing </a> if field has content, hide if it doesn't. -->
                                    <?php if (get_sub_field('live_link')): ?> </a> <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-7 p-5 text-left">

                        <!-- Get the site title -->
                        <h3><span class="text-purple">Site:</span> <?php the_sub_field('site_title'); ?></h3>

                        <!-- Check to see if URL exists and display it if it does -->
                        <?php if (get_sub_field('live_link')): ?>
                            <h4>
                                <span class="text-purple">URL:</span>
                                <a href="<?php the_sub_field('live_link'); ?>"
                                   target="_blank"><?php the_sub_field('live_link'); ?>
                                </a>
                            </h4>
                        <?php endif; ?>

                        <!-- Get Is site active -->
                        <h4><span class="text-purple">Currently Active:</span> <?php the_sub_field('active'); ?></h4>

                        <!-- Get my Role -->
                        <h4><span class="text-purple">Role:</span> <?php the_sub_field('role'); ?></h4>

                        <!-- Get Details paragraph -->
                        <h4><span class="text-purple">Details:</span> <?php the_sub_field('details'); ?></h4>

                        <!-- Get stack -->
                        <h4><span class="text-purple">Stack:</span> <?php the_sub_field('stack'); ?></h4>

                        <!-- If Buttons exists, show live site + Github link -->
                        <div class="mt-10 md:mt-0">
                            <?php if (get_sub_field('live_link')): ?>
                                <a class="bg-purple py-3 px-12 rounded-full text-white transition-colors duration-500"
                                   href="<?php the_sub_field('live_link'); ?>" target="_blank">View
                                    Live</a>
                            <?php endif; ?>
                            <?php if (get_sub_field('github_link')): ?>
                                <a class="inline-block mt-4 border border-purple py-3 px-12 rounded-full text-white transition-colors duration-500"
                                   href="<?php the_sub_field('github_link'); ?>" target="_blank"><i
                                            class="fab fa-github"></i> View
                                    on Github</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        else :
        endif; ?>
    </div>
</div>

<img src="<?php the_field('skill_top_image'); ?>" alt="Top Squiggle (it's a word)">
<div class="bg-purple text-white">
    <h1 id="contact" class="text-center opacity-60 text-6xl lg:text-8xl pt-5 uppercase">Contact</h1>
    <div class="m-4 md:my-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-12 lg:-mt-14">
            <div class="col-span-12 md:col-span-8 md:col-start-3 mt-5 p-5">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="text-center text-white py-10">
    <p>Oh hey.</p>
    <p>You made it to the footer.</p>
    <p>Thanks for that. ❤️</p>
    <a href="#top">^ Back to top ^</a>
</div>


