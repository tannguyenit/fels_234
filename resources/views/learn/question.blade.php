
@if ($rand == 1)
    <div id="central-area" class="central-area js-central-area" >
        <div id="boxes">
            <div class="garden-box presentation show-more show-want-mem">
                <button  class="next-button btn btn-inverse clearfix" title="{{ trans('layout.next') }}" >
                    <span class="next-icon"></span>
                    <div class="next-text">{{ trans('layout.next') }}</div>
                </button>
                <div class="thing-show has-first-audio show-more">
                    <div class="columns have-attributes">
                        <div class="row column primary">
                            <div class="row-label">{{ trans('layout.english') }}</div>
                            <div class="row-value">
                                <div class="primary-value" id='readWords'>
                                    {{ $question['word']['content'] }}
                                </div>
                            </div>
                        </div>
                        <div class="row column  secondary" >
                            <div class="row-label">{{ trans('layout.vietnamese') }}</div>
                            <div class="row-value">
                                <div class="primary-value">
                                    {{ $question['word_answer']['content'] }}
                                </div>
                            </div>
                        </div>
                        <div class="row column  first-audio">
                            <div class="row-label">{{ trans('layout.audio') }}</div>
                            <div class="row-value">
                                <div class="primary-value">
                                    <a class="audio-player audio-player-hover" id='WordsRead' href="javascript:void(0)"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif ($rand == 2)
    <div id="central-area" class="central-area js-central-area wide" >
        <div id="boxes">
            <div class="garden-box video-pre-presentation show-more">
                <button  class="next-button btn btn-inverse clearfix" title="{{ trans('layout.next') }}" >
                    <span class="next-icon"></span>
                    <div class="next-text">{{ trans('layout.next') }}</div>
                </button>
                <div class="question-row audio-typing clearfix">
                    <div class="qquestion audio-typing">
                        {{ $question['word']['content'] }}
                    </div>
                </div>
                <ol class="choices unchosen clearfix grid row" data-question="{{ $question['id'] }}">
                    <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerOne]['id'] }}" >
                        <span class="index">{{ trans('layout.A') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerOne]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                    <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerTwo]['id'] }}" >
                        <span class="index">{{ trans('layout.B') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerTwo]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerThirt]['id'] }}" >
                        <span class="index">{{ trans('layout.C') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerThirt]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerFour]['id'] }}" >
                        <span class="index">{{ trans('layout.D') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerFour]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@elseif ($rand == 3)
    <div id="central-area" class="central-area js-central-area" >
        <div id="boxes">
            <div class="garden-box multiple_choice">
                <button  class="next-button btn btn-inverse clearfix" title="{{ trans('layout.next') }}" >
                    <span class="next-icon"></span>
                    <div class="next-text">{{ trans('layout.next') }}</div>
                </button>
                <div class="question-row clearfix" data-thing-id="67340749">
                    <div class="graphic colour-1"></div>
                    <div class="qquestion qtext  ">{{ $question['word']['content'] }}</div>
                    <div class="extra-info  "></div>
                </div>
                <div class="hint">
                    <span class="hint-text">{{ trans('layout.select') }}</span>
                </div>
                <ol class="choices unchosen clearfix grid row" data-question="{{ $question['id'] }}">
                    <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerOne]['id'] }}" >
                        <span class="index">{{ trans('layout.A') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerOne]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                    <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerTwo]['id'] }}" >
                        <span class="index">{{ trans('layout.B') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerTwo]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerThirt]['id'] }}" >
                        <span class="index">{{ trans('layout.C') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerThirt]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerFour]['id'] }}" >
                        <span class="index">{{ trans('layout.D') }}</span>
                        <span class="val ">{{ $checkLessonWord[$answerFour]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@elseif ($rand == 4)
    <div id="central-area" class="central-area js-central-area" >
        <div id="boxes">
            <div class="garden-box multiple_choice">
                <button  class="next-button btn btn-inverse clearfix" title="{{ trans('layout.next') }}" >
                    <span class="next-icon"></span>
                    <div class="next-text">{{ trans('layout.next') }}</div>
                </button>
                <div class="question-row clearfix">
                    <div class="qquestion audio-typing">
                        <div class="audio-prompt js-audio-prompt" id='WordsRead'>
                            <div class="hidden" id='readWords'>
                                {{ $question['word']['content'] }}
                            </div>
                        </div>
                    </div>
                    <div class="extra-info  "></div>
                </div>
                <div class="hint">
                    <span class="hint-text">{{ trans('layout.select') }}</span>
                </div>
                <ol class="choices unchosen clearfix grid row" data-question="{{ $question['id'] }}">
                    <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerOne]['id'] }}" >
                        <span class="index">a</span>
                        <span class="val ">{{ $checkLessonWord[$answerOne]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                    <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerTwo]['id'] }}" >
                        <span class="index">b</span>
                        <span class="val ">{{ $checkLessonWord[$answerTwo]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerThirt]['id'] }}" >
                        <span class="index">c</span>
                        <span class="val ">{{ $checkLessonWord[$answerThirt]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerFour]['id'] }}" >
                        <span class="index">d</span>
                        <span class="val ">{{ $checkLessonWord[$answerFour]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@elseif ($rand == 0)
    <div id="central-area" class="central-area js-central-area" >
        <div id="boxes">
            <div class="garden-box multiple_choice">
                <button  class="next-button btn btn-inverse clearfix" title="{{ trans('layout.next') }}" >
                    <span class="next-icon"></span>
                    <div class="next-text">{{ trans('layout.next') }}</div>
                </button>
                <div class="question-row audio-typing clearfix" data-thing-id="67340745">
                    <div class="qquestion audio-typing">
                        <div class="audio-prompt js-audio-prompt" id='WordsRead'>
                            <div class="hidden" id='readWords'>
                                {{ $question['word']['content'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hint">
                    <span class="hint-text">{{ trans('layout.select') }}</span>
                </div>
                <ol class="choices unchosen clearfix grid row" data-question="{{ $question['id'] }}">
                    <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerOne]['id'] }}" >
                        <span class="index">a</span>
                        <span class="val ">{{ $checkLessonWord[$answerOne]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                    <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerTwo]['id'] }}" >
                        <span class="index">b</span>
                        <span class="val ">{{ $checkLessonWord[$answerTwo]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-5" data-choice-id="{{ $checkLessonWord[$answerThirt]['id'] }}" >
                        <span class="index">c</span>
                        <span class="val ">{{ $checkLessonWord[$answerThirt]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                     <li class="shiny-box choice clearfix col-xs-6" data-choice-id="{{ $checkLessonWord[$answerFour]['id'] }}" >
                        <span class="index">d</span>
                        <span class="val ">{{ $checkLessonWord[$answerFour]['word_answer']['content'] }}</span>
                        <span class="marking-icon"></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endif
