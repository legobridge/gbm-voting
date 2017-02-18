<form action="vote.php" method="post">
    <div class="form-group">
        <button class="btn btn-default" name="vote" type="submit" value="ishu">
            <span aria-hidden="true" class="glyphicon glyphicon-ok"></span>
            Yes
        </button>
        <button class="btn btn-default" name="vote" type="submit" value="ashu">
            <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
            No
        </button>
        <button class="btn btn-default" name="vote" type="submit" value="kushu" hidden disabled>
            <span aria-hidden="true" class="glyphicon glyphicon-question-sign"></span>
            Other
        </button>
    </div>
</form>