build-lists: true
footer: IDM 221: Web Authoring I
slidenumbers: true
autoscale: true
theme: Dark Mode

# IDM 221

## Web Design I

---

## Media on the Web

^ Before we cover how to include media files in a web page, you need to be familiar with the various media types and codes that are used for video and audio. You also need to know what media types and encoders work with browsers that are used today.

---

## Media types

- MPEG
- AVI
- MP3
- AAC

^ When we think about _media types_ a short list may come to mind: MPEG, AVI, MP3 and maybe event AAC. The reality is there are dozens of media types for both video and audio. These media types are nothing more than containers of information that are used by _media players_ to play the content that the types contain.

---

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/adobe-premiere.jpg)

^ For example, an MPEG file contains a video track, which is what the users see, and one or more audio tracks, which is what the users hear. To keep the video coordinated with the audio, a media type can also contain markers that help the audio sync up with the video. In addition, a media type can contain metadata, such as the title of the video, any still imagery related to the video (cover art), the length of the video, and digital rights management information.

---

## Plugins

- Quicktime plugin
- Windows Media Player plugin
- Flash plugin
- Native: no plugin :smile:

^ For some media types, a browser will require a plugin that plays that type. These plugins are general released by the player manufacturers. For instance, Apple provides a QuickTime plugin, Windows provides a Windows Media Player plugin, and Adobe provides a Flash Player plugin. If a browser supports a media type without requiring a plugin, you can say that the browser "natively" supports that media type.

---

### Video Codecs

- H.264
- Theora
- VP8

^ Within a media type, a video is encoded with a specific type of code. Although there are dozens of different codes used for video, these three are the most noteworthy. H.264 is usually mentioned in the same breath as MPEG since it was developed by MPEG in 1993. Theora is the video stream portion of the Ogg media type. And VP8 was originally developed by On2 Technologies (later acquired by Google).

---

### What's Happening

- determine the media type
- can it decode the video/audio?
- decode/display the video
- decode and play the audio
- interpret metadata

^ When a media player plays a media type, it has to go through these five tasks. Of those tasks, decoding the video/audio is the most difficult. To decode, media players use software components called _codecs_, which are in simple terms "cracking the codes" to display a series of images (frames) on the screen.

---

### Audio Codecs

- AAC
- FLAC
- MP3
- Vorbis
- WMA

^ Like video, there are dozens of audio codecs available. An audio codec is used to decode the audio portion of an audio or video file, convert it to audible waveforms, and send it to the speaks of a system, which convert the waveforms into sound.

^ MP3 is one example, which can be played on dedicated MP3 players or as part of a video track. AAC was adopted by Apple and is currently supported by all Apple products including iTunes, iPhone and iPad. Vorbis is commonly used for the Ogg media types and WMA is commonly used for Microsoft's WMA and ASF media types.

---

^ Browser Support

![fit](http://digm.drexel.edu/crs/IDM221/presentations/images/caniuse_video.png)

^ One of the problems when adding audio/video to a website is that there isn't a single combination of types that will work on all modern browsers as well as older browsers like Internet Explorer.

---

## Option 1: Flash

![fill](https://upload.wikimedia.org/wikipedia/commons/1/1f/Adobe_Flash_Player_v10_icon.png)

^ One solution is to encode your media in the Flash format (.swf) and rely on the browser's Flash Player plugin to play the media.

---

### Why Not Flash

- requires plugin
- mobile devices
- stability

^ This solution has worked well for many years, but it now presents three major problems. First, you're forcing users to rely on a plugin to view your media (a plugin that Google is going to completely remove from Chrome within the next year). Second, flash is not supported on mobile devices. Third, the Flash player is unstable in some browsers and causes crashes.

---

## HTML5

- [CanIUse Video](http://caniuse.com/#search=video%20format)
- [CanIUse Audio](http://caniuse.com/#search=audio%20format)

^ HTML5 video and audio elements help eliminate the need for Flash.

---

### MIME Types

| Media Type | MIME type |
| ---------- | --------- |
| MP3 | audio/mp3 |
| Ogg Vorbis | audio/ogg |
| WebM | video/webm |
| Ogg Theora | video/ogg |
| MP4 | video/mp4 |

^ This table shows some common _MIME types_ that you can use to identify the content of an audio or video file. A MIME type helps a browser determine what player to use to open a file. In some cases, you'll need to include the codecs for a MIME type.

---

## Encoding Media

- Miro Converter
- iTunes (audio)
- Quicktime Pro (video/audio)
- Windows Media Encoder
- Adobe Media Encoder
- FFmpeg
- Handbrake

^ You must go through a process to convert your raw, uncompressed video/audio file into one or more of these codec formats. There are numerous software packages available to help with the conversion.

---

## [Miro Converter](http://www.mirovideoconverter.com)

![Miro Converter logo](https://skatter.com/files/2011/03/miro-video-converter.jpg)

^ One free product I like is Miro Video Converter. It lets you convert a file from just about any media type into the types needed for web applications. It also supports audio only formats as well as formats for mobile devices. (demo)

---

![Lex shaking with jello](http://i.imgur.com/qrndQWU.gif)

^ Look at all of this information you have to know before you even begin looking at the code for adding a media element to a page.

---

## HTML5 video and audio

```html
<video src="media/myvideo.mp4"></video>
<audio src="media/myaudio.mp3"></audio>
```

^ In the simplest form, you add the video and audio elements to a page and code the `src` attributes that point to the media files to be played.

---

## Options

- src
- poster
- preload
- autoplay
- loop
- muted
- controls
- width
- height

^ The `src` is the URL of the file to be played. `poster` is supported only by the _video_ element and provides the path to a static image to be displayed in place of the video file before it is played. _preload_ tells the browser whether to preload any data, options are _none_ (default), _metadata_ (dimensions, tracklist), or _auto_ (preload the entire media file). _autoplay_, _loop_, _muted_. _controls_ displays the default control toolbar under the player. (demo)

---

```html
<video
  width="1280"
  height="720"
  controls
  autoplay
  poster="media/myvideo_poster.jpg">
    <source src="media/myvideo.mp4" />
    <source src="media/myvideo.webm" type="video/webm" />
    <source src="media/myvideo.ogv" type="video/ogg" />
</video>

<audio controls autoplay>
  <source src="media/myaudio.mp3" />
  <source src="media/myaudio.ogg" />
</audio>
```

^ These examples show how the HTML5 audio and video elements can be used to simply the way that media is added to a web page. First, this coding will work for all modern browsers. Even better - these elements provide video and audio that is native to all current editions of the major browsers. You don't have to worry about whether or not users have the right player or plugin installed. You don't have to worry about whether or not their browsers will crash because of Flash. The only problem is older browsers - which are fading away :smile:.

---

![phew](https://media.giphy.com/media/ijGS9TME6iN7W/giphy.gif)

---

## For Next Week
