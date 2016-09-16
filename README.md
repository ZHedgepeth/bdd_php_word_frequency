# _Word Frequency_

#### _Web application that tests the frequency of a given word. 09.16.16_

#### By _**Zachary Hedgepeth**_

## Description
_The user will be prompted to enter a word and a string of words. Word Frequency will determine how many times if any, the word in the first form was used in the second form._

## Specifications
* 1). Word is one letter and string is one letter matching word.
  + example input: [a], [a]
  + example output: 1

* 2). Word is one letter and string is one letter not matching word.
  + example input: [a], [b]
  + example output: 0

* 3). Word is one letter and string is one letter not matching word and one letter that matches word.
  + example input: [a], [a, b]
  + example output: 1

* 4). Word is a one word and string is one word matching word.
  + example input: [ant], [ant]
  + example output: 1

* 5). Word is one word and string is one word not matching word.
  + example input: [a], [bat]
  + example output: 0

* 6). Word is one word and string is multiple words including word.
  + example input: [ant], [the one ant is smaller than another ant.]
  + example output: 2

* 7). Word is one word and string is multiple words not including word.
  + example input: [ant], [the one bug is smaller than another bug.]
  + example output: 0
