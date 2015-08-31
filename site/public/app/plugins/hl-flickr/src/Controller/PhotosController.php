<?php

namespace HybridLogic\Flickr\Controller;

use HybridLogic\Flickr\Repository\PhotoRepositoryInterface;
use Slab\Core\Exception\HttpNotFoundException;

/**
 * Photos Controller
 *
 * @package default
 * @author Luke Lanchester
 **/
class PhotosController {


	/**
	 * @var HybridLogic\Flickr\Repository\PhotoRepositoryInterface
	 **/
	protected $photos;


	/**
	 * Constructor
	 *
	 * @param HybridLogic\Flickr\Repository\PhotoRepositoryInterface
	 * @return void
	 **/
	public function __construct(PhotoRepositoryInterface $photos) {

		$this->photos = $photos;

	}



	/**
	 * Get all photos
	 *
	 * @return view
	 **/
	public function getPhotos() {

		$photos = $this->photos->get();

		return view('photos/index', ['photos' => $photos]);

	}



	/**
	 * Get a photo
	 *
	 * @param int Photo ID
	 * @return view
	 **/
	public function getPhoto($id) {

		$photo = $this->photos->find($id);

		if(!$photo) {
			throw new HttpNotFoundException('Photo not found');
		}

		return view('photos/view', ['photo' => $photo]);

	}



}
