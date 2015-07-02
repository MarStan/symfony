<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquireType;

/**
 * Class PageController
 * @author John Doe
 */
class PageController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
    /**
     * undocumented function
     *
     * @return void
     */
    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    /**
     * undocumented function
     *
     * @return void
     */
    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquireType(), $enquiry);

        if ($request->getMethod() === 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from blog')
                    ->setFrom('enquires@blog.com')
                    ->setTo($this->container ->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody(
                        $this->renderView(
                            'BloggerBlogBundle:Page:contactEmail.txt.twig',
                            array('enquiry' => $enquiry )
                        )
                    );

                $this->get('mailer')->send($message);
                $this->addFlash(
                    'blogger-notice',
                    'Your contact eqnquiry was succsessfully sent. Thank you!'
                );

                return $this->redirectToRoute('BloggerBlogBundle_contact');
            }
        }

        return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
