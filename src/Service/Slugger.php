<?php

namespace App\Service;


class Slugger 
{
    public function autoSlug(PreSubmitEvent $event) : void {
        $data  = $event->getData();

        if(empty($data['slug'])){
            $slugger['slug'] = new AsciiSlugger();
            $data['slug'] = strtolower($slugger->slug($data['title']).'-'.new \Date());
            $event->setData($data);
        }
    }


    public function attachTimpeStamo(PostSubmitEvent $event) : void {
        $data  = $event->getData();

        $data->setCreatedAt(new \DateTimeImmutable());

    }
}