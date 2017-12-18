<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Session;

class CommitsController extends Controller
{

    // Home
    public function home() {
        return view('home', ['title' => 'Search']);
    }

    /**
     * List all commits of a repository
     * $user: repository owner login
     * $repo: repository name
     **/
    public function listCommits($user, $repo) {
        $client = new Client();
        try {
            $res = $client->request('GET', 'https://api.github.com/repos/'.$user.'/'.$repo.'/commits');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            echo 'Caught response: ' . $e->getResponse()->getStatusCode();
            $errorMessage = "Repository not found";
            // Return to the last page when repository not found
            return back()->with("error", $errorMessage);
        }
        $body = $res->getBody();
        $body = json_decode($body);
        $commits = [];
        foreach($body as $commit){
            $commits[] = $commit;
        }
        return view('CommitList/CommitListPage', [
            'user' => $user,
            'repo' => $repo,
            'title' => 'Commits List',
            'commits' => $commits,
            ]);
    }

    /**
     * Details of one commit
     * $user: repository owner login
     * $repo: repository name
     * $sha: commit sha
     */
    public function selectCommit($user, $repo, $sha) {
        $client = new GuzzleHttp\Client();
        $res = $client->get('https://api.github.com/repos/'.$user.'/'.$repo.'/commits/'.$sha);
        $body = $res->getBody();
        $commit = json_decode($body);
        return view('CommitDetails/CommitDetailsPage', [
            'user' => $user,
            'repo' => $repo,
            'title' => 'Commit Details',
            'commit' => $commit
            ]);
    }
}
