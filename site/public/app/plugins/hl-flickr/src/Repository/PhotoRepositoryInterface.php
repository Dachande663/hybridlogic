<?php

namespace HybridLogic\Flickr\Repository;

/**
 * Photo Repository Interface
 *
 * @package default
 * @author Luke Lanchester
 **/
interface PhotoRepositoryInterface {


	/**
	 * Get photos
	 *
	 * @return array Photos
	 **/
	public function get();


	/**
	 * Get single photo
	 *
	 * @return HybridLogic\Flickr\Model\PhotoModel
	 **/
	public function find($id);


}
