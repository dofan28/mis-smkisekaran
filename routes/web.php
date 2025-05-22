<?php

use App\Http\Controllers\SluggableAnnouncementController;
use App\Http\Controllers\SluggableArticleController;
use App\Http\Controllers\SluggableEventController;
use App\Http\Controllers\SluggableGalleryController;
use App\Http\Controllers\SluggablePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Home\Index::class);
Route::get('/intro', App\Livewire\User\SchoolProfile\Intro\Index::class);
Route::get('/history', App\Livewire\User\SchoolProfile\History\Index::class);
Route::get('/visionmission', App\Livewire\User\SchoolProfile\VisionMission\Index::class);
Route::get('/organizationalstructure', App\Livewire\User\SchoolProfile\OrganizationalStructure\Index::class);
Route::get('/documents', App\Livewire\User\SchoolProfile\Document\Index::class);
Route::get('/lecture', App\Livewire\User\SchoolProfile\Lecture\Index::class);
Route::get('/schoolprogram', App\Livewire\User\SchoolProfile\SchoolProgram\Index::class);
Route::get('/schoolachievement', App\Livewire\User\SchoolProfile\SchoolAchievement\Index::class);

Route::get('/competencyskill/{competencySkill:slug}', App\Livewire\User\CompetencySkill\Show::class);
Route::get('/announcement/{announcement:slug}', App\Livewire\User\Announcement\Show::class);
Route::get('/event/{event:slug}', App\Livewire\User\Event\Show::class);
Route::get('/articles', App\Livewire\User\Article\Index::class);
Route::get('/article/{article:slug}', App\Livewire\User\Article\Show::class);
Route::get('/gallery/{gallery:slug}', App\Livewire\User\Gallery\Show::class);
Route::get('/teacher/{teacher:slug}', App\Livewire\User\Teacher\Show::class);
Route::get('/ppdb/{ppdb:slug}', App\Livewire\User\Ppdb\Show::class);
Route::get('/facilities/{facilities:slug}', App\Livewire\User\Facilities\Show::class);


Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', App\Livewire\Admin\Index::class);

    Route::get('/admin/pages/checkSlug', SluggablePageController::class);
    Route::get('/admin/pages/imageSlider', App\Livewire\Admin\Page\ImageSlider\Index::class);
    Route::get('/admin/pages/imageSlider/create', App\Livewire\Admin\Page\ImageSlider\Create::class);
    Route::get('/admin/pages/imageSlider/{pageImageSlider:slug}/edit', App\Livewire\Admin\Page\ImageSlider\Edit::class);
    Route::get('/admin/pages/imageSlider/{pageImageSlider:slug}', App\Livewire\Admin\Page\ImageSlider\Show::class);

    Route::get('/admin/pages/schoolProfile', App\Livewire\Admin\Page\SchoolProfile\Index::class);
    Route::get('/admin/pages/schoolProfile/create', App\Livewire\Admin\Page\SchoolProfile\Create::class);
    Route::get('/admin/pages/schoolProfile/{pageSchoolProfile:slug}/edit', App\Livewire\Admin\Page\SchoolProfile\Edit::class);
    Route::get('/admin/pages/schoolProfile/{pageSchoolProfile:slug}', App\Livewire\Admin\Page\SchoolProfile\Show::class);

    Route::get('/admin/pages/competencySkill', App\Livewire\Admin\Page\CompetencySkill\Index::class);
    Route::get('/admin/pages/competencySkill/create', App\Livewire\Admin\Page\CompetencySkill\Create::class);
    Route::get('/admin/pages/competencySkill/{pageCompetencySkill:slug}/edit', App\Livewire\Admin\Page\CompetencySkill\Edit::class);
    Route::get('/admin/pages/competencySkill/{pageCompetencySkill:slug}', App\Livewire\Admin\Page\CompetencySkill\Show::class);

    Route::get('/admin/pages/teacher', App\Livewire\Admin\Page\Teacher\Index::class);
    Route::get('/admin/pages/teacher/create', App\Livewire\Admin\Page\Teacher\Create::class);
    Route::get('/admin/pages/teacher/{pageTeacher:slug}/edit', App\Livewire\Admin\Page\Teacher\Edit::class);
    Route::get('/admin/pages/teacher/{pageTeacher:slug}', App\Livewire\Admin\Page\Teacher\Show::class);

    Route::get('/admin/pages/runningText', App\Livewire\Admin\Page\RunningText\Index::class);
    Route::get('/admin/pages/runningText/create', App\Livewire\Admin\Page\RunningText\Create::class);
    Route::get('/admin/pages/runningText/{pageRunningText:slug}/edit', App\Livewire\Admin\Page\RunningText\Edit::class);
    Route::get('/admin/pages/runningText/{pageRunningText:slug}', App\Livewire\Admin\Page\RunningText\Show::class);

    Route::get('/admin/pages/ppdb', App\Livewire\Admin\Page\Ppdb\Index::class);
    Route::get('/admin/pages/ppdb/create', App\Livewire\Admin\Page\Ppdb\Create::class);
    Route::get('/admin/pages/ppdb/{pagePPDB:slug}/edit', App\Livewire\Admin\Page\Ppdb\Edit::class);
    Route::get('/admin/pages/ppdb/{pagePPDB:slug}', App\Livewire\Admin\Page\Ppdb\Show::class);

    Route::get('/admin/pages/facilities', App\Livewire\Admin\Page\Facilities\Index::class);
    Route::get('/admin/pages/facilities/create', App\Livewire\Admin\Page\Facilities\Create::class);
    Route::get('/admin/pages/facilities/{pageFacilities:slug}/edit', App\Livewire\Admin\Page\Facilities\Edit::class);
    Route::get('/admin/pages/facilities/{pageFacilities:slug}', App\Livewire\Admin\Page\Facilities\Show::class);

    Route::get('/admin/pages', App\Livewire\Admin\Page\Index::class);
    Route::get('/admin/pages/{page:slug}', App\Livewire\Admin\Page\Show::class);

    Route::get('/admin/announcements/checkSlug', SluggableAnnouncementController::class);
    Route::get('/admin/announcements', App\Livewire\Admin\Announcement\Index::class);
    Route::get('/admin/announcements/create', App\Livewire\Admin\Announcement\Create::class);
    Route::get('/admin/announcements/{announcement:slug}/edit', App\Livewire\Admin\Announcement\Edit::class);
    Route::get('/admin/announcements/{announcement:slug}', App\Livewire\Admin\Announcement\Show::class);

    Route::get('/admin/articles/checkSlug', SluggableArticleController::class);
    Route::get('/admin/articles', App\Livewire\Admin\Article\Index::class);
    Route::get('/admin/articles/create', App\Livewire\Admin\Article\Create::class);
    Route::get('/admin/articles/{article:slug}/edit', App\Livewire\Admin\Article\Edit::class);
    Route::get('/admin/articles/{article:slug}', App\Livewire\Admin\Article\Show::class);

    Route::get('/admin/events/checkSlug', SluggableEventController::class);
    Route::get('/admin/events', App\Livewire\Admin\Event\Index::class);
    Route::get('/admin/events/create', App\Livewire\Admin\Event\Create::class);
    Route::get('/admin/events/{event:slug}/edit', App\Livewire\Admin\Event\Edit::class);
    Route::get('/admin/events/{event:slug}', App\Livewire\Admin\Event\Show::class);

    Route::get('/admin/galleries/checkSlug', SluggableGalleryController::class);
    Route::get('/admin/galleries', App\Livewire\Admin\Gallery\Index::class);
    Route::get('/admin/galleries/create', App\Livewire\Admin\Gallery\Create::class);
    Route::get('/admin/galleries/{gallery:slug}/edit', App\Livewire\Admin\Gallery\Edit::class);
    Route::get('/admin/galleries/{gallery:slug}', App\Livewire\Admin\Gallery\Show::class);
});
