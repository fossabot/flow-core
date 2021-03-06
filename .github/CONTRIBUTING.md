## Contributing

First off, thank you for considering contributing to FLOW. It's people
like you that make FLOW such a great software.

### 1. Where do I go from here?

If you've noticed a bug or have a question, [search the issue tracker][] to see if
someone else in the community has already created a ticket. If not, go ahead and
[make one][new issue]!

### 2. Fork & create a branch

If this is something you think you can fix, then [fork FLOW][] and
create a branch with a descriptive name.

A good branch name would be (where issue #325 is the ticket you're working on):

```sh
git checkout -b 325-add-japanese-translations
```

### 3. Did you find a bug?

* **Ensure the bug was not already reported** by [searching all issues][].

* If you're unable to find an open issue addressing the problem,
  [open a new one][new issue]. Be sure to include a **title and clear
  description**, as much relevant information as possible, and a **code sample**
  or an **executable test case** demonstrating the expected behavior that is not
  occurring.

* If possible, use the relevant bug report templates to create the issue.
  Simply copy the content of the appropriate template into a .rb file, make the
  necessary changes to demonstrate the issue, and **paste the content into the
  issue description**:
  * [**FLOW** master issues][master template]

### 4. Implement your fix or feature

At this point, you're ready to make your changes! Feel free to ask for help;
everyone is a beginner at first :smile_cat:

### 4. View your changes

FLOW is meant to be used by humans, not cucumbers. So make sure to take
a look at your changes in a browser.

```sh
Navigate to http://yourwebsite.com/ or http://localhost/
```

### 7. Get the style right

Your patch should follow the same conventions & pass the same code quality
checks as the rest of the project. [Codeclimate][codeclimate] will give you
feedback in this regard. You can check & fix codeclimate's feedback by running
it locally using [Codeclimate's CLI][codeclimate cli], via `codeclimate analyze`.

### 8. Make a Pull Request

At this point, you should switch back to your develop branch and make sure it's
up to date with FLOW's develop branch:

```sh
git remote add upstream git@github.com:haskalsystems/flow-core.git
git checkout develop
git pull upstream develop
```

Then update your feature branch from your local copy of develop, and push it!

```sh
git checkout 325-add-japanese-translations
git rebase develop
git push --set-upstream origin 325-add-japanese-translations
```

Finally, go to GitHub and [make a Pull Request][] :D

### 9. Keeping your Pull Request updated

If a maintainer asks you to "rebase" your PR, they're saying that a lot of code
has changed, and that you need to update your branch so it's easier to merge.

To learn more about rebasing in Git, there are a lot of [good][git rebasing]
[resources][interactive rebase] but here's the suggested workflow:

```sh
git checkout 325-add-japanese-translations
git pull --rebase upstream develop
git push --force-with-lease 325-add-japanese-translations
```

### 10. Merging a PR (maintainers only)

A PR can only be merged into master by a maintainer if:

* It is passing CI.
* It has been approved by at least two maintainers. If it was a maintainer who
  opened the PR, only one extra approval is needed.
* It has no requested changes.
* It is up to date with current master.

Any maintainer is allowed to merge a PR if all of these conditions are
met.

[search the issue tracker]: https://github.com/HaskalSystems/flow-core/issues?q=something
[new issue]: https://github.com/HaskalSystems/flow-core/issues/new
[fork FLOW]: https://help.github.com/articles/fork-a-repo
[searching all issues]: https://github.com/HaskalSystems/flow-core/issues?q=
[codeclimate]: https://codeclimate.com
[codeclimate cli]: https://github.com/codeclimate/codeclimate
[make a pull request]: https://help.github.com/articles/creating-a-pull-request
[git rebasing]: http://git-scm.com/book/en/Git-Branching-Rebasing
[interactive rebase]: https://help.github.com/articles/interactive-rebase