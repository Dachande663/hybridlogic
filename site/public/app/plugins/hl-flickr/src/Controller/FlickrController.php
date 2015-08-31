<?php

namespace HybridLogic\Photos\Controller;

use HybridLogic\Photos\Repository\PhotoRepositoryInterface;
use Slab\Core\Exception\HttpNotFoundException;

/**
 * Flickr Controller
 *
 * @package default
 * @author Luke Lanchester
 **/
class FlickrController {


	/**
	 * @var HybridLogic\Photos\Repository\PhotoRepositoryInterface
	 **/
	protected $photos;


	/**
	 * Constructor
	 *
	 * @param HybridLogic\Photos\Repository\PhotoRepositoryInterface
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
